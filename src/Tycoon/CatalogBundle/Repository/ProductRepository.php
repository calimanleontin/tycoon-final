<?php

namespace Tycoon\CatalogBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * Class ProductRepository
 * @package Tycoon\CatalogBundle\Repository
 */
class ProductRepository extends EntityRepository
{
    /**
     * @param bool $categories
     * @param bool $attributes
     *
     * @return QueryBuilder
     */
    public function getProductListQuery($categories = false, $attributes = false)
    {
        /** @var QueryBuilder $qb */
        $qb = $this->createQueryBuilder('product');

        if ($categories) {
            $qb
                ->addSelect('categories')
                ->leftJoin('product.categories', 'categories');
        }

        if ($attributes) {
            $qb
                ->addSelect('attributes')
                ->leftJoin('product.attributes', 'attributes');
        }

        return $qb;
    }

    /**
     * @param array $attributesList
     * @return QueryBuilder
     */
    public function getProductListChoiceQuery(
        $attributesList,
        $count = false,
        $ids = false,
        $offset = false,
        $results = false
    ) {
        /** @var QueryBuilder $queryBuilder */
        $queryBuilder = $this->getProductListQuery(false, true);

        if ($count == true) {
            $queryBuilder
                ->select("COUNT (DISTINCT product)");
        }

        if ($ids == true) {
            $queryBuilder
                ->select("product.id")
                ->groupBy("product.id")
                ->setFirstResult($offset)
                ->setMaxResults($results);
        }

        if ($attributesList != null) {
            /**
             * @var string $attributeName
             * @var string $attributeValues
             */
            foreach ($attributesList as $attributeName => $attributeValues) {

                /** @var string $escapedName */
                $escapedName = $this->escapeName($attributeName);

                $queryBuilder
                    ->leftJoin('product.attributes', "attributes{$escapedName}")
                    ->andWhere("attributes{$escapedName}.name = :$escapedName")
                    ->setParameter("$escapedName", $attributeName);

                if (isset($attributeValues['min'])) {
                    $queryBuilder
                        ->andWhere("attributes{$escapedName}.value >= :min{$escapedName}")
                        ->setParameter("min{$escapedName}", $attributeValues['min']);
                }
                if (isset($attributeValues['max'])) {
                    $queryBuilder
                        ->andWhere("attributes{$escapedName}.value <= :max{$escapedName}")
                        ->setParameter("max{$escapedName}", $attributeValues['max']);
                }
            }
        }

        $queryBuilder->orderBy('product.name', 'ASC');

        return $queryBuilder;
    }

    /**
     * @param bool $categories
     * @param bool $attributes
     * @param int $id
     * @return QueryBuilder
     */
    public function getProductByIdQuery($id, $categories = false, $attributes = false)
    {
        return $this->getProductListQuery($categories, $attributes)
            ->where('product.id = :id')
            ->setParameter('id', $id);
    }

    /**
     * @param bool $categories
     * @param bool $attributes
     * @param array $search
     * @return QueryBuilder
     */
    public function getProductListBySearchQuery($search, $categories = false, $attributes = false)
    {
        /** @var QueryBuilder $qb */
        $qb = $this->getProductListQuery($categories, $attributes);

        if ($search != null) {
            /** @var int $searchNumber */
            $searchNumber = 0;

            /** @var string $word */
            foreach ($search as $word) {
                $searchNumber++;
                $qb
                    ->orWhere("product.name LIKE :word{$searchNumber}")
                    ->setParameter("word{$searchNumber}", "%{$word}%");

            }
        }

        $qb->orderBy('product.name', 'ASC');

        return $qb;
    }

    /**
     * @param string $name
     * @return mixed
     */
    private function escapeName($name)
    {
        $escaped = preg_replace('/\W/', '_', $name);

        return $escaped;
    }

    /**
     * @return mixed
     */
    public function getProductsCount()
    {
        $qb = $this->createQueryBuilder('product')
            ->select('COUNT(product)')
            ->getQuery()
            ->getSingleScalarResult();

        return $qb;
    }

    /**
     * @param int $offset
     * @param array $results
     * @return QueryBuilder
     */
    public function getProductIdsQuery($offset, $results)
    {
        $qb = $this->createQueryBuilder('product')
            ->select('product.id')
            ->setFirstResult($offset)
            ->setMaxResults($results)
            ->orderBy('product.name', 'ASC');

        return $qb;
    }

    /**
     * @param array $productIds
     * @return QueryBuilder
     */
    public function getProductsWithIdsQuery($productIds)
    {
        $qb = $this->getProductListQuery(false, true)
            ->where('product.id IN (:productIds)')
            ->setParameter('productIds', $productIds)
            ->orderBy('product.name', 'ASC');

        return $qb;
    }

    public function getProductNamesQuery()
    {
        $qb = $this->createQueryBuilder('product')
            ->select('product.name');

        return $qb;
    }
}
