<?php

namespace Tycoon\OrderBundle\Service;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\NonUniqueResultException;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Flash\FlashBag;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Tycoon\AccessBundle\Controller;
use Tycoon\AccessBundle\Entity\User;
use Tycoon\CatalogBundle\Entity\Product;
use Tycoon\CatalogBundle\Repository\ProductRepository;
use Tycoon\OrderBundle\Entity\Item;
use Tycoon\OrderBundle\Entity\Order;

/**
 * Class OrderService
 * @package Tycoon\OrderBundle\Service
 */
class OrderService implements ContainerAwareInterface
{
    /** @var ContainerInterface $container */
    protected $container;

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

    /**
     * @param ContainerInterface $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @param Session $session
     * @param int $id
     * @return bool
     */
    public function increaseItemQuantity(Session $session, $id)
    {
        /** @var Product $product */
        $product = $this->manager
            ->getRepository('TycoonCatalogBundle:Product')
            ->find($id);

        /** @var Order $unfinishedOrder */
        $unfinishedOrder = $session->get('cart');

        if (!$unfinishedOrder) {
            $unfinishedOrder = new Order();
        }

        $item = new Item($product);

        /** @var bool $isAdded */
        $isAdded = $unfinishedOrder->addItem($item);

        $session->set('cart', $unfinishedOrder);

        return $isAdded;
    }

    /**
     * @param Order $order
     * @return bool
     * @throws NonUniqueResultException
     */
    public function initializeOrder(Order $order)
    {
        /** @var UsernamePasswordToken $token */
        $token = $this->container
            ->get('security.context')
            ->getToken();

        /** @var User $user */
        $user = $token->getUser();

        $order->setDate(new \DateTime());
        $order->setStatus('initialized');
        $order->setUser($user);

        /** @var array $initialItems */
        $initialItems = $order->getItems();

        $order->setItems(array());

        $this->manager->persist($order);

        /** @var ProductRepository $productRepo */
        $productRepo = $this->manager->getRepository('TycoonCatalogBundle:Product');

        /** @var bool $insufficientStock */
        $insufficientStock = false;

        $outOfStock = array();

        $this->manager->beginTransaction();

        try {
            /** @var Item $item */
            foreach ($initialItems as $item) {
                /** @var int $quantity */
                $quantity = $item->getQuantity();

                /** @var int $productId */
                $productId = $item->getProduct()->getId();

                /** @var int $rowsAffected */
                $rowsAffected = $this->container
                    ->get('doctrine')
                    ->getConnection()
                    ->executeUpdate(
                        '
                        UPDATE product P
                        SET P.stock = P.stock - ?, P.sold = P.sold + ?
                        WHERE P.id = ?
                        AND P.stock - ? >= 0
                        ',
                        array($quantity, $quantity, $productId, $quantity)
                    );

                /** @var Product $product */
                $product = $productRepo
                    ->getProductByIdQuery($productId, false, true)
                    ->getQuery()
                    ->getOneOrNullResult();

                if ($rowsAffected == 0) {
                    $outOfStock[$productId] = $product->getStock();
                    $insufficientStock = true;
                }

                $item->setProduct($product);
                $item->setProductPrice($product->getPrice());

                $this->manager->persist($item);
            }

            $order->setItems($initialItems);

            if ($insufficientStock) {
                throw new \LogicException();
            }

            $this->manager->flush();
            $this->manager->commit();
        } catch (\LogicException $e) {
            $this->manager->rollback();
            $this->rollBack($order, $outOfStock);
            $this->manager->flush();

            return false;
        } catch (\Exception $e) {
            /** @var Session $session */
            $session = $this->container->get('session');

            /** @var FlashBag $flashBag */
            $flashBag = $session->getFlashBag();

            $flashBag->add('warning', 'There has been an error. Please try again later.');

            return false;
        }

        return true;
    }

    /**
     * @param Order $order
     * @param array $outOfStock
     */
    private function rollBack(Order $order, $outOfStock)
    {
        /** @var Session $session */
        $session = $this->container->get('session');

        /** @var FlashBag $flashBag */
        $flashBag = $session->getFlashBag();

        /** @var array $initialItems */
        $initialItems = $order->getItems();

        $order->setDate(new \DateTime());
        $order->setStatus('failed - no stock');

        $unfinishedOrder = new Order();

        $newItems = array();

        /** @var Item $initialItem */
        foreach ($initialItems as $initialItem) {
            /** @var Product $product */
            $product = $initialItem->getProduct();

            /** @var int $quantity */
            $quantity = $initialItem->getQuantity();

            if (isset($outOfStock[$product->getId()])) {
                if ($outOfStock[$product->getId()] == 0) {
                    $flashBag->add('warning', "The product {$product->getName()} is not available anymore.");
                    continue;
                }
                $flashBag->add('warning', "The product {$product->getName()} was updated with the remaining stock.");

                $item = new Item($product);
                $item->setQuantity($outOfStock[$product->getId()]);
                $item->setProductPrice($product->getPrice());
                $newItems[] = $item;
                $item->setOrder($unfinishedOrder);
                continue;
            }
            $item = new Item($product);
            $item->setQuantity($quantity);
            $item->setProductPrice($product->getPrice());
            $newItems[] = $item;
            $item->setOrder($unfinishedOrder);
        }

        $unfinishedOrder->setItems($newItems);

        $session->set('cart', $unfinishedOrder);
    }
}
