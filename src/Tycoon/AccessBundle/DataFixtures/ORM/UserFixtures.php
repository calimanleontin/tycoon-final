<?php

namespace Tycoon\AccessBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ContainerAwareInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\HttpFoundation\Session\Session;
use Tycoon\AccessBundle\Entity\User;

/**
 * Class UserFixtures
 * @package Tycoon\AccessBundle\DataFixtures\ORM
 */
class UserFixtures extends AbstractFixture implements OrderedFixtureInterface, ContainerAwareInterface
{
    /** @var ContainerInterface $container */
    protected $container;

    /**
     * @param ContainerInterface $container
     */
    public function setContainer(ContainerInterface $container = null)
    {
        $this->container = $container;
    }

    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $passwordEncoder = $this->container->get('tycoon_access.password_encoder');

        $user0 = new User();
        $user0->setName('admin');
        $user0->setAdminFlag(1);
        $user0->setCreated(new \DateTime());
        $user0->setEmail('admin@tcs.ro');
        $encodedPassword = $passwordEncoder->encodePassword('admin1', '');
        $user0->setPassword($encodedPassword);
        $manager->persist($user0);

        $user1 = new User();
        $user1->setName('leontin');
        $user1->setAdminFlag(1);
        $user1->setCreated(new \DateTime());
        $user1->setEmail('calimanleontin@gmail.com');
        $encodedPassword = $passwordEncoder->encodePassword('parolaleontin', '');
        $user1->setPassword($encodedPassword);
        $manager->persist($user1);

        $user2 = new User();
        $user2->setName('alexandru');
        $user2->setAdminFlag(1);
        $user2->setCreated(new \DateTime());
        $user2->setEmail('alexandru.olteanu@emag.ro');
        $encodedPassword = $passwordEncoder->encodePassword('parolaalexandru', '');
        $user2->setPassword($encodedPassword);
        $manager->persist($user2);

        $user3 = new User();
        $user3->setName('theodor');
        $user3->setAdminFlag(1);
        $user3->setCreated(new \DateTime());
        $user3->setEmail('theodor.rosca@emag.ro');
        $encodedPassword = $passwordEncoder->encodePassword('parolatheodor', '');
        $user3->setPassword($encodedPassword);
        $manager->persist($user3);

        $user4 = new User();
        $user4->setName('florin');
        $user4->setAdminFlag(1);
        $user4->setCreated(new \DateTime());
        $user4->setEmail('florin.leu@emag.ro');
        $user4->setPassword('parolaflorin');
        $encodedPassword = $passwordEncoder->encodePassword('parolaflorin', '');
        $user4->setPassword($encodedPassword);
        $manager->persist($user4);

        $manager->flush();
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 1;
    }
}
