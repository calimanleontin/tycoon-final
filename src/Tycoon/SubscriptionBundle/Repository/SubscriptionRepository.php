<?php

namespace Tycoon\SubscriptionBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * Class SubscriptionRepository
 * @package Tycoon\SubscriptionBundle\Repository
 */
class SubscriptionRepository extends EntityRepository
{
    /**
     * @param int $currentTimeTimestamp
     * @param int $optimalValue
     * @return array
     */
    public function findNecessarySubscriptions($currentTimeTimestamp, $optimalValue)
    {
        /**
         * @var QueryBuilder $qb
         */
        $qb = $this->createQueryBuilder('subscription')
            ->select('subscription')
            ->where(
                'subscription.notified != :endNotified AND subscription.endDateTimestamp - :thisTime < :optimalValue'
            )
            ->setParameter('endNotified', 'ended')
            ->setParameter('thisTime', $currentTimeTimestamp)
            ->setParameter('optimalValue', $optimalValue)
            ->orWhere('subscription.notified = :notNotified AND subscription.endDateTimestamp > :thisTime')
            ->setParameter('notNotified', 'not-notified')
            ->setParameter('thisTime', $currentTimeTimestamp);

        return $qb
            ->getQuery()
            ->getResult();
    }
}
