<?php

namespace Tycoon\CatalogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * Class CategoryRepository
 * @package Tycoon\CatalogBundle\Repository
 */
class CategoryRepository extends EntityRepository
{
    /**
     * @param int $id
     * @return QueryBuilder
     */
    public function getCategoryByIdQuery($id)
    {
        /** @var QueryBuilder $qb */
        $qb = $this->createQueryBuilder('category')
            ->select('category, product, attribute')
            ->leftJoin('category.products', 'product')
            ->leftJoin('product.attributes', 'attribute')
            ->where('category.id = :category_id')
            ->setParameter('category_id', $id);

        return $qb;
    }

    /**
     * @param int $id
     * @param array $productIds
     * @return QueryBuilder
     */
    public function getProductsByCategoryIdQuery($id, $productIds)
    {
        /** @var QueryBuilder $qb */
        $qb = $this->getCategoryByIdQuery($id)
            ->andWhere('product.id IN (:productIds)')
            ->setParameter('productIds', $productIds)
            ->orderBy('product.name', 'ASC');

        return $qb;
    }

    /**
     * @param int $id
     * @return array
     */
    public function getProductsCount($id)
    {
        /** @var QueryBuilder $qb */
        $qb = $this->createQueryBuilder('category')
            ->select('COUNT(product)')
            ->leftJoin('category.products', 'product')
            ->where('category.id = :category_id')
            ->setParameter('category_id', $id);

        return $qb->getQuery()
            ->getSingleScalarResult();
    }

    /**
     * @param int $id
     * @param int $offset
     * @param array $results
     * @return QueryBuilder
     */
    public function getProductIdsQuery($id, $offset, $results)
    {
        $qb = $this->createQueryBuilder('category')
            ->select('product.id')
            ->leftJoin('category.products', 'product')
            ->where('category.id = :category_id')
            ->setParameter('category_id', $id)
            ->setFirstResult($offset)
            ->setMaxResults($results)
            ->orderBy('product.name', 'ASC');

        return $qb;
    }
}
