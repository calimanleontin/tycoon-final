<?php

namespace Tycoon\OrderBundle\Service;

use Doctrine\ORM\EntityManager;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\ServerException;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Tycoon\AccessBundle\Entity\User;
use Tycoon\CatalogBundle\Entity\Attribute;
use Tycoon\CatalogBundle\Entity\Subscription;
use Tycoon\OrderBundle\Entity\GameItem;
use Tycoon\OrderBundle\Entity\Item;
use Tycoon\OrderBundle\Entity\Order;

/**
 * Class DeliveryService
 * @package Tycoon\OrderBundle\Service
 */
class DeliveryService implements ContainerAwareInterface
{
    /** @var EntityManager $manager */
    protected $manager;

    /** @var ContainerInterface $container */
    protected $container;

    /**
     * @param EntityManager $manager
     * @param ContainerInterface $container
     */
    public function __construct(EntityManager $manager, ContainerInterface $container)
    {
        $this->manager = $manager;
        $this->container = $container;
    }

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
    public function deliverOrder(Order $order)
    {
        $order->setDate(new \DateTime());
        $order->setStatus('finalized');

        /** @var Session $session */
        $session = $this->container->get('session');

        /** @var FlashBag $flashBag */
        $flashBag = $session->getFlashBag();

        /** @var UsernamePasswordToken $token */
        $token = $this->container->get('security.context')->getToken();

        /** @var User $user */
        $user = $token->getUser();
        //                      =====> JSON MESSAGE <=====

        $orderItems = array();

        /** @var int $itemNumber */
        $itemNumber = 0;

        /** @var array $initialItems */
        $initialItems = $order->getItems();

        /** @var int $totalPrice */
        $totalPrice = 0;

        /** @var Item $item */
        foreach ($initialItems as $item) {
            $itemNumber++;

            $totalPrice += $item->getProductPrice() * $item->getQuantity();

            /** @var array $itemAttributes */
            $itemAttributes = $item->getProduct()->getAttributes();

            $itemToSend = new GameItem();
            $itemToSend->setName($item->getProduct()->getName());
            $itemToSend->setType(strtolower($item->getProduct()->className()));
            $stats = array(
                "stamina",
                "strength",
                "agility",
                "intelligence",
                "striking",
                "grappling",
                "takedown",
                "kicking"
            );

            /** @var int $validityDays */
            $validityDays = 0;

            /** @var int $validityHours */
            $validityHours = 0;

            /** @var string $stat */
            foreach ($stats as $stat) {

                /** @var Attribute $attribute */
                foreach ($itemAttributes as $attribute) {
                    if (strtolower($attribute->getName()) == $stat) {
                        $itemToSend->setStat($stat, $attribute->getValue());

                        break;
                    } elseif (strtolower($attribute->getName()) == 'validity-days') {
                        $validityDays = $attribute->getValue();
                    } elseif (strtolower($attribute->getName()) == 'validity-hours') {
                        $validityHours = $attribute->getValue();
                    }
                }
            }

            $itemToSend->setQuantity($item->getQuantity());

            /** @var string $path */
            $path = 'http://'.$_SERVER['HTTP_HOST'].'/images/'.$item->getProduct()->getPath();

            $itemToSend->setImageUrl($path);

            if ($item->getProduct() instanceof Subscription) {
                $itemToSend->setDuration($validityDays * 24 * 60 + $validityHours * 60);
            }

            $orderItems["item{$itemNumber}"] = $itemToSend->getVars();
        }

        /** @var array $orderMessage */
        $orderMessage = array(
            "order_id" => $order->getId(),
            "manager_id" => $user->getId(),
            "total_price" => $totalPrice,
            "no_items" => $itemNumber,
            "items" => $orderItems
        );

        /** @var Client $client */
        $client = new Client(
            array(
                'base_uri' => $this->container->getParameter('tycoon_game_server_address'),
                'timeout' => 2,
                'allow_redirects' => false
            )
        );

        /** @var string $uri */
        $uri = $this->container->getParameter('tycoon_game_order_uri');

        /** @var string $jsonMessage */
        $jsonMessage = json_encode($orderMessage);

        try {
            $client->post($uri, $options = array('body' => $jsonMessage));
        } catch (ClientException $e) {
            /** @var PaymentService $paymentService */
            $paymentService = $this->container->get('tycoon_order.payment_service');

            $flashBag->add('warning', 'Something went wrong during delivery. Please try again later.');

            $paymentService->rollBack($order, 'failed - client error');

            return false;
        } catch (ServerException $e) {
            /** @var PaymentService $paymentService */
            $paymentService = $this->container->get('tycoon_order.payment_service');

            $flashBag->add('warning', 'Something went wrong during delivery. Please try again later.');

            $paymentService->rollBack($order, 'failed - server error');

            return false;
        }

        $this->manager->flush();

        $session->set('cart', false);

        $flashBag->add('success', 'Your order has been processed.');

        return true;
    }
}
