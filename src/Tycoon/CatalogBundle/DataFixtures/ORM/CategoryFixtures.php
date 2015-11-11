<?php

namespace Tycoon\CatalogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tycoon\CatalogBundle\Entity\Category;

/**
 * Class CategoryFixtures
 * @package Tycoon\CatalogBundle\DataFixtures\ORM
 */
class CategoryFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $category1 = new Category();
        $category1->setName('Fighters');
        $category1->setDescription('Fighters are powerful and unique.');
        $manager->persist($category1);

        $category2 = new Category();
        $category2->setName('Consumables');
        $category2->setDescription('Items with effects that decay over time.');
        $manager->persist($category2);

        $category3 = new Category();
        $category3->setName('Subscriptions');
        $category3->setDescription('Items that add bonuses after attending events for a certain time.');
        $manager->persist($category3);

        $category4 = new Category();
        $category4->setName('Basic');
        $category4->setDescription('Items for beginners.');
        $manager->persist($category4);

        $category5 = new Category();
        $category5->setName('Advanced');
        $category5->setDescription('Items for the advanced ones.');
        $manager->persist($category5);

        $category6 = new Category();
        $category6->setName('Expert');
        $category6->setDescription('Items for experienced users.');
        $manager->persist($category6);

        $manager->flush();

        $this->addReference('category-1', $category1);
        $this->addReference('category-2', $category2);
        $this->addReference('category-3', $category3);
        $this->addReference('category-4', $category4);
        $this->addReference('category-5', $category5);
        $this->addReference('category-6', $category6);

    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 1;
    }
}
