<?php

namespace Tycoon\OrderBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * Class OrderRepository
 * @package Tycoon\OrderBundle\Repository
 */
class OrderRepository extends EntityRepository
{
    /**
     * @param int $id
     * @return QueryBuilder
     */
    public function getOrdersQuery($id)
    {
        /** @var QueryBuilder $qb */
        $qb = $this->createQueryBuilder('orders')
            ->select('orders , items', 'product')
            ->leftJoin('orders.items', 'items')
            ->leftJoin('items.product', 'product')
            ->where('orders.user = :id')
            ->setParameter('id', $id)
            ->orderBy('orders.date', 'desc');

        return $qb;
    }
}
