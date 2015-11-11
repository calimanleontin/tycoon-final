<?php

namespace Tycoon\AccessBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

/**
 * Class UserRepository
 * @package Tycoon\AccessBundle\Repository
 */
class UserRepository extends EntityRepository
{
    /**
     * @param bool $name
     * @param bool $email
     * @return QueryBuilder
     */
    public function findOneByOrQuery($name = false, $email = false)
    {
        /** @var QueryBuilder $qb */
        $qb = $this->createQueryBuilder('user')
            ->select('user');

        if ($name != false) {
            $qb
                ->orWhere('user.name = :name')
                ->setParameter('name', $name);
        }

        if ($email != false) {
            $qb
                ->orWhere('user.email = :email')
                ->setParameter('email', $email);
        }

        return $qb;
    }
}
