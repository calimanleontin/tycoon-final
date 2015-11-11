<?php

namespace Tycoon\SubscriptionBundle\Service;

use Doctrine\ORM\EntityManager;
use Tycoon\AccessBundle\Entity\User;
use Tycoon\CatalogBundle\Entity\Attribute;
use Tycoon\CatalogBundle\Entity\Product;
use Tycoon\CatalogBundle\Entity\Subscription as CatalogSubscription;
use Tycoon\OrderBundle\Entity\Item;
use Tycoon\OrderBundle\Entity\Order;
use Tycoon\SubscriptionBundle\Entity\Subscription;

/**
 * Class SubscriptionService
 * @package Tycoon\SubscriptionBundle\Service
 */
class SubscriptionService
{
    /** @var EntityManager $manager */
    protected $manager;

    /**
     * @param EntityManager $manager
     */
    public function __construct(EntityManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @param Order $order
     */
    public function addSubscription(Order $order)
    {
        /** @var User $user */
        $user = $order->getUser();

        /** @var array $items */
        $items = $order->getItems();

        /** @var Item $item */
        foreach ($items as $item) {
            /** @var Product $product */
            $product = $item->getProduct();

            if ($product instanceof CatalogSubscription) {
                /** @var string $name */
                $name = $product->getName();

                /** @var int $duration */
                $duration = 0;

                /** @var array $attributes */
                $attributes = $product->getAttributes();

                /** @var Attribute $attribute */
                foreach ($attributes as $attribute) {
                    switch ($attribute->getName()) {
                        case "Validity-Hours":
                            $duration += $attribute->getValue() * 60 * 60;

                            break;
                        case "Validity-Days":
                            $duration += $attribute->getValue() * 24 * 60 * 60;

                            break;
                        default:

                            break;
                    }
                }

                $startDate = new \DateTime();

                $subscription = new Subscription();

                $this->manager->persist($subscription);

                $subscription->setUser($user);
                $subscription->setName($name);
                $subscription->setStartDate($startDate);

                /** @var int $endDateTimestamp */
                $endDateTimestamp = $startDate->getTimestamp() + $duration;

                $endDate = new \DateTime();
                $endDate->setTimestamp($endDateTimestamp);
                $subscription->setEndDate($endDate);
                $subscription->setEndDateTimestamp($endDateTimestamp);
            }
        }

        $this->manager->flush();
    }
}
