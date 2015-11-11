<?php

namespace Tycoon\CatalogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tycoon\CatalogBundle\Entity\Attribute;

/**
 * Class AttributeFixtures
 * @package Tycoon\CatalogBundle\DataFixtures\ORM
 */
class AttributeFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $product1 = $manager->merge($this->getReference('product-1'));
        $product2 = $manager->merge($this->getReference('product-2'));
        $product3 = $manager->merge($this->getReference('product-3'));
        $product4 = $manager->merge($this->getReference('product-4'));
        $product5 = $manager->merge($this->getReference('product-5'));
        $product6 = $manager->merge($this->getReference('product-6'));
        $product7 = $manager->merge($this->getReference('product-7'));
        $product8 = $manager->merge($this->getReference('product-8'));
        $product9 = $manager->merge($this->getReference('product-9'));
        $product10 = $manager->merge($this->getReference('product-10'));
        $product11 = $manager->merge($this->getReference('product-11'));
        $product12 = $manager->merge($this->getReference('product-12'));
        $product13 = $manager->merge($this->getReference('product-13'));
        $product14 = $manager->merge($this->getReference('product-14'));
        $product15 = $manager->merge($this->getReference('product-15'));
        $product16 = $manager->merge($this->getReference('product-16'));
        $product17 = $manager->merge($this->getReference('product-17'));
        $product18 = $manager->merge($this->getReference('product-18'));
        $product19 = $manager->merge($this->getReference('product-19'));
        $product20 = $manager->merge($this->getReference('product-20'));
        $product21 = $manager->merge($this->getReference('product-21'));
        $product22 = $manager->merge($this->getReference('product-22'));
        $product23 = $manager->merge($this->getReference('product-23'));
        $product24 = $manager->merge($this->getReference('product-24'));
        $product25 = $manager->merge($this->getReference('product-25'));
        $product26 = $manager->merge($this->getReference('product-26'));
        $product27 = $manager->merge($this->getReference('product-27'));
        $product28 = $manager->merge($this->getReference('product-28'));
        $product29 = $manager->merge($this->getReference('product-29'));
        $product30 = $manager->merge($this->getReference('product-30'));
        $product31 = $manager->merge($this->getReference('product-31'));
        $product32 = $manager->merge($this->getReference('product-32'));
        $product33 = $manager->merge($this->getReference('product-33'));
        $product34 = $manager->merge($this->getReference('product-34'));
        $product35 = $manager->merge($this->getReference('product-35'));
        $product36 = $manager->merge($this->getReference('product-36'));
        $product37 = $manager->merge($this->getReference('product-37'));
        $product38 = $manager->merge($this->getReference('product-38'));
        $product39 = $manager->merge($this->getReference('product-39'));
        $product40 = $manager->merge($this->getReference('product-40'));
        $product41 = $manager->merge($this->getReference('product-41'));
        $product42 = $manager->merge($this->getReference('product-42'));
        $product43 = $manager->merge($this->getReference('product-43'));
        $product44 = $manager->merge($this->getReference('product-44'));
        $product45 = $manager->merge($this->getReference('product-45'));
        $product46 = $manager->merge($this->getReference('product-46'));
        $product47 = $manager->merge($this->getReference('product-47'));
        $product48 = $manager->merge($this->getReference('product-48'));
        $product49 = $manager->merge($this->getReference('product-49'));
        $product50 = $manager->merge($this->getReference('product-50'));
        $product51 = $manager->merge($this->getReference('product-51'));
        $product52 = $manager->merge($this->getReference('product-52'));
        $product53 = $manager->merge($this->getReference('product-53'));
        $product54 = $manager->merge($this->getReference('product-54'));
        $product55 = $manager->merge($this->getReference('product-55'));
        $product56 = $manager->merge($this->getReference('product-56'));
        $product57 = $manager->merge($this->getReference('product-57'));
        $product58 = $manager->merge($this->getReference('product-58'));
        $product59 = $manager->merge($this->getReference('product-59'));
        $product60 = $manager->merge($this->getReference('product-60'));
        $product61 = $manager->merge($this->getReference('product-61'));
        $product62 = $manager->merge($this->getReference('product-62'));
        $product63 = $manager->merge($this->getReference('product-63'));
        $product64 = $manager->merge($this->getReference('product-64'));
        $product65 = $manager->merge($this->getReference('product-65'));
        $product66 = $manager->merge($this->getReference('product-66'));
        $product67 = $manager->merge($this->getReference('product-67'));
        $product68 = $manager->merge($this->getReference('product-68'));
        $product69 = $manager->merge($this->getReference('product-69'));
        $product70 = $manager->merge($this->getReference('product-70'));
        $product71 = $manager->merge($this->getReference('product-71'));
        $product72 = $manager->merge($this->getReference('product-72'));
        $product73 = $manager->merge($this->getReference('product-73'));
        $product74 = $manager->merge($this->getReference('product-74'));
        $product75 = $manager->merge($this->getReference('product-75'));
        $product76 = $manager->merge($this->getReference('product-76'));
        $product77 = $manager->merge($this->getReference('product-77'));
        $product78 = $manager->merge($this->getReference('product-78'));
        $product79 = $manager->merge($this->getReference('product-79'));
        $product80 = $manager->merge($this->getReference('product-80'));
        $product81 = $manager->merge($this->getReference('product-81'));
        $product82 = $manager->merge($this->getReference('product-82'));
        $product83 = $manager->merge($this->getReference('product-83'));
        $product84 = $manager->merge($this->getReference('product-84'));
        $product85 = $manager->merge($this->getReference('product-85'));
        $product86 = $manager->merge($this->getReference('product-86'));
        $product87 = $manager->merge($this->getReference('product-87'));
        $product88 = $manager->merge($this->getReference('product-88'));
        $product89 = $manager->merge($this->getReference('product-89'));
        $product90 = $manager->merge($this->getReference('product-90'));
        $product91 = $manager->merge($this->getReference('product-91'));
        $product92 = $manager->merge($this->getReference('product-92'));
        $product93 = $manager->merge($this->getReference('product-93'));
        $product94 = $manager->merge($this->getReference('product-94'));
        $product95 = $manager->merge($this->getReference('product-95'));
        $product96 = $manager->merge($this->getReference('product-96'));
        $product97 = $manager->merge($this->getReference('product-97'));
        $product98 = $manager->merge($this->getReference('product-98'));

        // ========> PRODUCT  1 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(4, 7));
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product1);
        $manager->persist($attribute);

        // ========> PRODUCT  2 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(4, 6));
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product2);
        $manager->persist($attribute);

        // ========> PRODUCT  3 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(4, 6));
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product3);
        $manager->persist($attribute);

        // ========> PRODUCT  4 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(4, 6));
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product4);
        $manager->persist($attribute);

        // ========> PRODUCT  5 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(6);
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product5);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(7);
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product5);
        $manager->persist($attribute);

        // ========> PRODUCT  6 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(8);
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product6);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(5);
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product6);
        $manager->persist($attribute);

        // ========> PRODUCT  7 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(6);
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product7);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(7);
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product7);
        $manager->persist($attribute);

        // ========> PRODUCT  8 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(9);
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product8);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(4);
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product8);
        $manager->persist($attribute);

        // ========> PRODUCT  9 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(7);
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product9);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(6);
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product9);
        $manager->persist($attribute);

        // ========> PRODUCT  10 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(7);
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product10);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(6);
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product10);
        $manager->persist($attribute);

        // ========> PRODUCT 11 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product11);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product11);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product11);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product11);
        $manager->persist($attribute);

        // ========> PRODUCT 12 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product12);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product12);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product12);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product12);
        $manager->persist($attribute);

        // ========> PRODUCT 13 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product13);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product13);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product13);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product13);
        $manager->persist($attribute);

        // ========> PRODUCT 14 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product14);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product14);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product14);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product14);
        $manager->persist($attribute);

        // ========> PRODUCT 15 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product15);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product15);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product15);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product15);
        $manager->persist($attribute);

        // ========> PRODUCT 16 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product16);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product16);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product16);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(4, 9));
        $attribute->setProduct($product16);
        $manager->persist($attribute);

        // ========> PRODUCT 17 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(50, 60));
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product17);
        $manager->persist($attribute);

        // ========> PRODUCT 18 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(50, 60));
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product18);
        $manager->persist($attribute);

        // ========> PRODUCT  19 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(50, 60));
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product19);
        $manager->persist($attribute);

        // ========> PRODUCT  20 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(50, 60));
        $attribute->setUnitOfMeasurement('points-decaying');
        $attribute->setProduct($product20);
        $manager->persist($attribute);

        // ========> PRODUCT 21 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(10, 15));
        $attribute->setProduct($product21);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(10, 15));
        $attribute->setProduct($product21);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(10, 15));
        $attribute->setProduct($product21);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(10, 15));
        $attribute->setProduct($product21);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT9);
        $attribute->setValue(7);
        $attribute->setProduct($product21);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT10);
        $attribute->setValue(0);
        $attribute->setProduct($product21);
        $manager->persist($attribute);

        // ========> PRODUCT 22 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(45, 60));
        $attribute->setProduct($product22);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(45, 60));
        $attribute->setProduct($product22);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(45, 60));
        $attribute->setProduct($product22);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(45, 60));
        $attribute->setProduct($product22);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT9);
        $attribute->setValue(30);
        $attribute->setProduct($product22);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT10);
        $attribute->setValue(23);
        $attribute->setProduct($product22);
        $manager->persist($attribute);

        // ========> PRODUCT 23 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product23);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product23);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product23);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product23);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT9);
        $attribute->setValue(90);
        $attribute->setProduct($product23);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT10);
        $attribute->setValue(0);
        $attribute->setProduct($product23);
        $manager->persist($attribute);

        // ========> PRODUCT 24 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product24);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product24);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product24);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product24);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT9);
        $attribute->setValue(90);
        $attribute->setProduct($product24);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT10);
        $attribute->setValue(0);
        $attribute->setProduct($product24);
        $manager->persist($attribute);

        // ========> PRODUCT 25 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product25);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product25);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product25);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product25);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT9);
        $attribute->setValue(90);
        $attribute->setProduct($product25);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT10);
        $attribute->setValue(0);
        $attribute->setProduct($product25);
        $manager->persist($attribute);

        // ========> PRODUCT 26 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product26);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product26);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product26);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product26);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT9);
        $attribute->setValue(90);
        $attribute->setProduct($product26);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT10);
        $attribute->setValue(0);
        $attribute->setProduct($product26);
        $manager->persist($attribute);

        // ========> PRODUCT 27 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product27);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product27);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product27);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product27);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT9);
        $attribute->setValue(90);
        $attribute->setProduct($product27);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT10);
        $attribute->setValue(0);
        $attribute->setProduct($product27);
        $manager->persist($attribute);

        // ========> PRODUCT 28 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product28);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product28);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product28);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product28);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT9);
        $attribute->setValue(90);
        $attribute->setProduct($product28);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT10);
        $attribute->setValue(0);
        $attribute->setProduct($product28);
        $manager->persist($attribute);

        // ========> PRODUCT 29 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product29);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product29);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product29);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product29);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT9);
        $attribute->setValue(90);
        $attribute->setProduct($product29);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT10);
        $attribute->setValue(0);
        $attribute->setProduct($product29);
        $manager->persist($attribute);

        // ========> PRODUCT 30 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product30);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product30);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product30);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(150, 200));
        $attribute->setProduct($product30);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT9);
        $attribute->setValue(90);
        $attribute->setProduct($product30);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT10);
        $attribute->setValue(0);
        $attribute->setProduct($product30);
        $manager->persist($attribute);

        // ========> PRODUCT 31 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product31);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product31);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product31);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product31);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product31);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product31);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product31);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product31);
        $manager->persist($attribute);

        // ========> PRODUCT 32 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product32);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product32);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product32);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product32);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product32);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product32);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product32);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product32);
        $manager->persist($attribute);

        // ========> PRODUCT 33 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product33);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product33);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product33);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product33);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product33);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product33);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product33);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product33);
        $manager->persist($attribute);

        // ========> PRODUCT 34 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product34);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product34);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product34);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product34);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product34);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product34);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product34);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product34);
        $manager->persist($attribute);

        // ========> PRODUCT 35 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product35);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product35);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product35);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product35);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product35);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product35);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product35);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product35);
        $manager->persist($attribute);

        // ========> PRODUCT 36 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product36);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product36);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product36);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product36);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product36);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product36);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product36);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product36);
        $manager->persist($attribute);

        // ========> PRODUCT 37 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product37);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product37);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product37);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product37);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product37);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product37);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product37);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product37);
        $manager->persist($attribute);

        // ========> PRODUCT 38 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product38);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product38);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product38);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product38);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product38);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product38);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product38);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product38);
        $manager->persist($attribute);

        // ========> PRODUCT 39 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product39);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product39);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product39);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product39);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product39);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product39);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product39);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product39);
        $manager->persist($attribute);

        // ========> PRODUCT 40 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product40);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product40);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product40);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product40);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product40);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product40);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product40);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product40);
        $manager->persist($attribute);

        // ========> PRODUCT 41 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product41);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product41);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product41);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product41);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product41);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product41);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product41);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product41);
        $manager->persist($attribute);

        // ========> PRODUCT 42 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product42);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product42);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product42);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product42);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product42);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product42);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product42);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product42);
        $manager->persist($attribute);

        // ========> PRODUCT 43 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product43);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product43);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product43);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product43);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product43);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product43);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product43);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product43);
        $manager->persist($attribute);

        // ========> PRODUCT 44 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product44);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product44);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product44);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product44);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product44);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product44);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product44);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product44);
        $manager->persist($attribute);

        // ========> PRODUCT 45 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product45);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product45);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product45);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product45);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product45);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product45);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product45);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product45);
        $manager->persist($attribute);

        // ========> PRODUCT 46 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product46);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product46);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product46);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product46);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product46);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product46);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product46);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product46);
        $manager->persist($attribute);

        // ========> PRODUCT 47 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product47);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product47);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product47);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product47);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product47);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product47);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product47);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product47);
        $manager->persist($attribute);

        // ========> PRODUCT 48 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product48);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product48);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product48);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product48);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product48);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product48);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product48);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product48);
        $manager->persist($attribute);

        // ========> PRODUCT 49 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product49);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product49);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product49);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product49);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product49);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product49);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product49);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product49);
        $manager->persist($attribute);

        // ========> PRODUCT 50 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product50);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product50);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product50);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product50);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product50);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product50);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product50);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product50);
        $manager->persist($attribute);

        // ========> PRODUCT 51 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product51);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product51);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product51);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product51);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product51);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product51);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product51);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product51);
        $manager->persist($attribute);

        // ========> PRODUCT 52 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product52);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product52);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product52);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product52);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product52);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product52);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product52);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product52);
        $manager->persist($attribute);

        // ========> PRODUCT 53 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product53);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product53);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product53);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product53);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product53);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product53);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product53);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product53);
        $manager->persist($attribute);

        // ========> PRODUCT 54 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product54);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product54);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product54);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product54);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product54);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product54);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product54);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product54);
        $manager->persist($attribute);

        // ========> PRODUCT 55 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product55);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product55);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product55);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product55);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product55);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product55);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product55);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product55);
        $manager->persist($attribute);

        // ========> PRODUCT 56 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product56);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product56);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product56);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product56);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product56);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product56);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product56);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product56);
        $manager->persist($attribute);

        // ========> PRODUCT 57 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product57);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product57);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product57);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product57);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product57);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product57);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product57);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product57);
        $manager->persist($attribute);

        // ========> PRODUCT 58 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product58);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product58);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product58);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product58);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product58);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product58);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product58);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product58);
        $manager->persist($attribute);

        // ========> PRODUCT 59 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product59);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product59);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product59);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product59);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product59);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product59);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product59);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product59);
        $manager->persist($attribute);

        // ========> PRODUCT 60 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product60);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product60);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product60);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product60);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product60);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product60);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product60);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product60);
        $manager->persist($attribute);

        // ========> PRODUCT 61 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product61);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product61);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product61);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product61);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product61);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product61);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product61);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product61);
        $manager->persist($attribute);

        // ========> PRODUCT 62 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product62);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product62);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product62);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product62);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product62);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product62);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product62);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product62);
        $manager->persist($attribute);

        // ========> PRODUCT 63 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product63);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product63);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product63);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product63);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product63);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product63);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product63);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product63);
        $manager->persist($attribute);

        // ========> PRODUCT 64 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product64);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product64);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product64);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product64);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product64);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product64);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product64);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product64);
        $manager->persist($attribute);

        // ========> PRODUCT 65 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product65);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product65);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product65);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product65);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product65);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product65);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product65);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product65);
        $manager->persist($attribute);

        // ========> PRODUCT 66 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product66);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product66);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product66);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product66);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product66);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product66);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product66);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product66);
        $manager->persist($attribute);

        // ========> PRODUCT 67 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product67);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product67);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product67);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product67);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product67);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product67);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product67);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product67);
        $manager->persist($attribute);

        // ========> PRODUCT 68 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product68);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product68);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product68);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product68);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product68);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product68);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product68);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product68);
        $manager->persist($attribute);

        // ========> PRODUCT 69 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product69);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product69);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product69);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product69);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product69);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product69);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product69);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product69);
        $manager->persist($attribute);

        // ========> PRODUCT 70 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product70);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product70);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product70);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product70);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product70);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product70);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product70);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product70);
        $manager->persist($attribute);

        // ========> PRODUCT 71 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product71);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product71);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product71);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product71);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product71);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product71);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product71);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product71);
        $manager->persist($attribute);

        // ========> PRODUCT 72 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product72);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product72);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product72);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product72);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product72);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product72);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product72);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product72);
        $manager->persist($attribute);

        // ========> PRODUCT 73 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product73);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product73);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product73);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product73);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product73);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product73);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product73);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product73);
        $manager->persist($attribute);

        // ========> PRODUCT 74 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product74);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product74);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product74);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product74);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product74);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product74);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product74);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product74);
        $manager->persist($attribute);

        // ========> PRODUCT 75 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product75);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product75);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product75);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product75);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product75);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product75);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product75);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product75);
        $manager->persist($attribute);

        // ========> PRODUCT 76 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product76);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product76);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product76);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product76);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product76);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product76);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product76);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product76);
        $manager->persist($attribute);

        // ========> PRODUCT 77 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product77);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product77);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product77);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product77);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product77);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product77);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product77);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product77);
        $manager->persist($attribute);

        // ========> PRODUCT 78 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product78);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product78);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product78);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product78);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product78);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product78);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product78);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product78);
        $manager->persist($attribute);

        // ========> PRODUCT 79 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product79);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product79);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product79);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product79);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product79);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product79);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product79);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product79);
        $manager->persist($attribute);

        // ========> PRODUCT 80 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product80);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product80);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product80);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product80);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product80);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product80);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product80);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product80);
        $manager->persist($attribute);

        // ========> PRODUCT 81 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product81);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product81);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product81);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product81);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product81);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product81);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product81);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product81);
        $manager->persist($attribute);

        // ========> PRODUCT 82 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product82);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product82);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product82);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product82);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product82);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product82);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product82);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product82);
        $manager->persist($attribute);

        // ========> PRODUCT 83 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product83);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product83);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product83);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product83);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product83);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product83);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product83);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product83);
        $manager->persist($attribute);

        // ========> PRODUCT 84 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product84);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product84);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product84);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product84);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product84);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product84);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product84);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product84);
        $manager->persist($attribute);

        // ========> PRODUCT 85 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product85);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product85);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product85);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product85);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product85);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product85);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product85);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product85);
        $manager->persist($attribute);

        // ========> PRODUCT 86 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product86);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product86);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product86);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product86);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product86);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product86);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product86);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product86);
        $manager->persist($attribute);

        // ========> PRODUCT 87 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product87);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product87);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product87);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product87);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product87);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product87);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product87);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product87);
        $manager->persist($attribute);

        // ========> PRODUCT 88 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product88);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product88);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product88);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product88);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product88);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product88);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product88);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product88);
        $manager->persist($attribute);

        // ========> PRODUCT 89 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product89);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product89);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product89);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product89);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product89);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product89);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product89);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product89);
        $manager->persist($attribute);

        // ========> PRODUCT 90 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product90);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product90);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product90);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product90);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product90);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product90);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product90);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product90);
        $manager->persist($attribute);

        // ========> PRODUCT 91 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product91);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product91);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product91);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product91);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product91);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product91);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product91);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product91);
        $manager->persist($attribute);

        // ========> PRODUCT 92 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product92);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product92);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product92);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product92);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product92);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product92);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product92);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product92);
        $manager->persist($attribute);

        // ========> PRODUCT 93 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product93);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product93);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product93);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product93);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product93);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product93);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product93);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product93);
        $manager->persist($attribute);

        // ========> PRODUCT 94 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product94);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product94);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product94);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product94);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product94);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product94);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product94);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product94);
        $manager->persist($attribute);

        // ========> PRODUCT 95 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product95);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product95);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product95);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product95);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product95);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product95);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product95);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product95);
        $manager->persist($attribute);

        // ========> PRODUCT 96 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product96);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product96);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product96);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product96);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product96);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product96);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product96);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product96);
        $manager->persist($attribute);

        // ========> PRODUCT 97 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product97);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product97);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product97);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product97);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product97);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product97);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product97);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product97);
        $manager->persist($attribute);

        // ========> PRODUCT 98 <=========

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT1);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product98);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT2);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product98);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT3);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product98);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT4);
        $attribute->setValue(rand(10, 25));
        $attribute->setProduct($product98);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT5);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product98);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT6);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product98);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT7);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product98);
        $manager->persist($attribute);

        $attribute = new Attribute();
        $attribute->setName(Attribute::STAT8);
        $attribute->setValue(rand(2, 6));
        $attribute->setProduct($product98);
        $manager->persist($attribute);

        $manager->flush();
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 3;
    }
}
