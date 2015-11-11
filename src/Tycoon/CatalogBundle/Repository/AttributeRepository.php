<?php

namespace Tycoon\CatalogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * Class AttributeRepository
 * @package Tycoon\CatalogBundle\Repository
 */
class AttributeRepository extends EntityRepository
{
    /**
     * @return QueryBuilder
     */
    public function getAttributesQuery()
    {
        /** @var QueryBuilder $qb */
        $qb = $this->createQueryBuilder('attributes')
            ->select('attributes.name')
            ->distinct();

        return $qb;
    }

    /**
     * @param int $id
     * @return QueryBuilder
     */
    public function getAttributesByProduct($id)
    {
        $qb = $this->createQueryBuilder('attributes')
            ->select('attributes')
            ->where('attributes.product.id = :id')
            ->setParameter("id", $id);

        return $qb;
    }
}
