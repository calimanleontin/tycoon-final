<?php

namespace Tycoon\OrderBundle\Service;

use Doctrine\ORM\EntityManager;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\StreamInterface;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Tycoon\AccessBundle\Entity\User;
use Tycoon\CatalogBundle\Entity\Product;
use Tycoon\OrderBundle\Entity\Item;
use Tycoon\OrderBundle\Entity\Order;

/**
 * Class PaymentService
 * @package Tycoon\OrderBundle\Service
 */
class PaymentService implements ContainerAwareInterface
{
    /**
     * @var EntityManager $manager
     */
    protected $manager;

    /**
     * @param EntityManager $manager
     * @param ContainerInterface $container
     */
    public function __construct(EntityManager $manager, ContainerInterface $container)
    {
        $this->manager = $manager;
        $this->container = $container;
    }

    /** @var ContainerInterface $container */
    protected $container;

    /**
     * @param ContainerInterface $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @param Order $order
     * @return bool
     */
    public function hasGold(Order $order)
    {
        /** @var Session $session */
        $session = $this->container->get('session');

        /** @var FlashBag $flashBag */
        $flashBag = $session->getFlashBag();

        /** @var UsernamePasswordToken $token */
        $token = $this->container
            ->get('security.context')
            ->getToken();

        /** @var User $user */
        $user = $token->getUser();

        /** @var int $totalPrice */
        $totalPrice = 0;

        /** @var array $initialItems */
        $initialItems = $order->getItems();

        /** @var Item $item */
        foreach ($initialItems as $item) {
            $totalPrice += $item->getProduct()->getPrice() * $item->getQuantity();
        }

        //                              =====> JSON REQUEST <=====

        /** @var Client $client */
        $client = new Client(
            array(
                'base_uri' => $this->container->getParameter('tycoon_game_server_address'),
                'timeout' => 2,
                'allow_redirects' => false
            )
        );

        /** @var string $uri */
        $uri = $this->container->getParameter('tycoon_game_check_gold_uri');

        /** @var string $jsonMessage */
        $jsonMessage = json_encode(
            array(
                'manager_id' => $user->getId(),
                'order_id' => $order->getId(),
                'total_price' => $totalPrice
            )
        );

        try {
            /** @var ResponseInterface $receivedJson */
            $receivedJson = $client->post($uri, $options = array('body' => $jsonMessage));
        } catch (ClientException $e) {
            $flashBag->add('warning', 'Something went wrong during payment. Please try again later.');

            $this->rollBack($order, 'failed - client error');

            return false;
        } catch (ServerException $e) {
            $flashBag->add('warning', 'Something went wrong during payment. Please try again later.');

            $this->rollBack($order, 'failed - server error');

            return false;
        }

        //                                  ===============

        /** @var StreamInterface $jsonBody */
        $jsonBody = $receivedJson->getBody();

        /** @var mixed $response */
        $response = json_decode($jsonBody->read($jsonBody->getSize()));

        if ($response->status == 'accepted') {
            return true;
        }

        $this->rollBack($order, 'failed - no money');

        $flashBag->add('warning', 'You don\'t have enough money to purchase the items.');

        return false;
    }

    /**
     * @param Order $order
     * @param string $status
     */
    public function rollBack(Order $order, $status)
    {
        /** @var Session $session */
        $session = $this->container->get('session');

        /** @var array $initialItems */
        $initialItems = $order->getItems();

        $order->setDate(new \DateTime());
        $order->setStatus($status);

        $this->manager->flush();

        $unfinishedOrder = new Order();

        $newItems = array();

        /** @var Item $initialItem */
        foreach ($initialItems as $initialItem) {
            /** @var Product $product */
            $product = $initialItem->getProduct();

            /** @var int $productId */
            $productId = $product->getId();

            /** @var int $quantity */
            $quantity = $initialItem->getQuantity();

            $item = new Item($product);
            $item->setQuantity($quantity);
            $item->setProductPrice($product->getPrice());
            $newItems[] = $item;
            $item->setOrder($unfinishedOrder);

            $this->container
                ->get('doctrine')
                ->getConnection()
                ->executeUpdate(
                    '
                        UPDATE product P
                        SET P.stock = P.stock + ?, P.sold = P.sold - ?
                        WHERE P.id = ?
                        ',
                    array($quantity, $quantity, $productId)
                );
        }
        $unfinishedOrder->setItems($newItems);
        $this->manager->flush();

        $session->set('cart', $unfinishedOrder);
    }
}
