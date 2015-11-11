<?php

namespace Tycoon\AccessBundle\Service;

use Doctrine\ORM\EntityManager;
use Symfony\Component\Security\Core\Exception\UnsupportedUserException;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Tycoon\AccessBundle\Entity\User;

/**
 * Class DatabaseUserProvider
 * @package Tycoon\AccessBundle\Service
 */
class DatabaseUserProvider implements UserProviderInterface
{
    /**
     * @var EntityManager
     */
    protected $manager;

    /**
     * @param EntityManager $manager
     */
    public function __construct(EntityManager $manager)
    {
        $this->manager = $manager;
    }

    /**
     * @param string $name
     * @return UserInterface
     */
    public function loadUserByUsername($name)
    {
        /** @var UserInterface $user */
        $user = $this->manager
            ->getRepository('TycoonAccessBundle:User')
            ->findOneBy(array('name' => $name));

        if ($user !== null) {
            return $user;
        }

        throw new UsernameNotFoundException(sprintf('Username "%s" does not exist.', $name));
    }

    /**
     * @param UserInterface $user
     * @return UserInterface
     */
    public function refreshUser(UserInterface $user)
    {
        if (!$user instanceof User) {
            throw new UnsupportedUserException(sprintf('Instance of "%s" are not suported.', get_class($user)));
        }

        return $this->loadUserByUsername($user->getUsername());
    }

    /**
     * @param string $class
     * @return bool
     */
    public function supportsClass($class)
    {
        return 'TycoonAccessBundle:User' === $class;
    }
}
