<?php

namespace Tycoon\CatalogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tycoon\CatalogBundle\Entity\Fighter;
use Tycoon\CatalogBundle\Entity\Product;
use Tycoon\CatalogBundle\Entity\Subscription;

/**
 * Class ProductFixtures
 * @package Tycoon\CatalogBundle\DataFixtures\ORM
 */
class ProductFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $category1 = $manager->merge($this->getReference('category-1'));
        $category2 = $manager->merge($this->getReference('category-2'));
        $category3 = $manager->merge($this->getReference('category-3'));
        $category4 = $manager->merge($this->getReference('category-4'));
        $category5 = $manager->merge($this->getReference('category-5'));
        $category6 = $manager->merge($this->getReference('category-6'));

        // =====>   PRODUCT 1   <=====

        $product1 = new Product();
        $product1->setName('Red Potion');
        $product1->setPrice(PHP_INT_MAX);
        $product1->setDescription('Increases strength for a fighter immediately and decays over time.');
        $product1->setPath('product1.png');
        $product1->setStock(1000);
        //
        //
        $product1->addCategory($category2);
        $product1->addCategory($category4);
        $product1->addCategory($category5);
        $product1->addCategory($category6);
        //
        //
        $manager->persist($product1);

        // =====>   PRODUCT 2   <=====

        $product2 = new Product();
        $product2->setName('Blue Potion');
        $product2->setPrice(PHP_INT_MAX);
        $product2->setDescription('Increases intelligence for a fighter immediately and decays over time.');
        $product2->setPath('product2.png');
        $product2->setStock(1000);
        //
        //
        $product2->addCategory($category2);
        $product2->addCategory($category4);
        $product2->addCategory($category5);
        $product2->addCategory($category6);
        //
        //
        $manager->persist($product2);

        // =====>   PRODUCT 3   <=====

        $product3 = new Product();
        $product3->setName('Green Potion');
        $product3->setPrice(PHP_INT_MAX);
        $product3->setDescription('Increases agility for a fighter immediately and decays over time.');
        $product3->setPath('product3.png');
        $product3->setStock(1000);
        //
        //
        $product3->addCategory($category2);
        $product3->addCategory($category4);
        $product3->addCategory($category5);
        $product3->addCategory($category6);
        //
        //
        $manager->persist($product3);

        // =====>   PRODUCT 4   <=====

        $product4 = new Product();
        $product4->setName('Purple Potion');
        $product4->setPrice(PHP_INT_MAX);
        $product4->setDescription('Increases stamina for a fighter immediately and decays over time.');
        $product4->setPath('product4.png');
        $product4->setStock(1000);
        //
        //
        $product4->addCategory($category2);
        $product4->addCategory($category4);
        $product4->addCategory($category5);
        $product4->addCategory($category6);
        //
        //
        $manager->persist($product4);

        // =====>   PRODUCT 5   <=====

        $product5 = new Product();
        $product5->setName('Apple');
        $product5->setPrice(PHP_INT_MAX);
        $product5->setDescription('Increases strength and agility for a fighter immediately and decays over time.');
        $product5->setPath('product5.png');
        $product5->setStock(1000);
        //
        //
        $product5->addCategory($category2);
        $product5->addCategory($category5);
        $product5->addCategory($category6);
        //
        //
        $manager->persist($product5);

        // =====>   PRODUCT 6   <=====

        $product6 = new Product();
        $product6->setName('Blueberry');
        $product6->setPrice(PHP_INT_MAX);
        $product6->setDescription('Increases intelligence and stamina for a fighter immediately and decays over time.');
        $product6->setPath('product6.png');
        $product6->setStock(1000);
        //
        //
        $product6->addCategory($category2);
        $product6->addCategory($category5);
        $product6->addCategory($category6);
        //
        //
        $manager->persist($product6);

        // =====>   PRODUCT 7   <=====

        $product7 = new Product();
        $product7->setName('Strawberry');
        $product7->setPrice(PHP_INT_MAX);
        $product7->setDescription('Increases agility and stamina for a fighter immediately and decays over time.');
        $product7->setPath('product7.png');
        $product7->setStock(1000);
        //
        //
        $product7->addCategory($category2);
        $product7->addCategory($category5);
        $product7->addCategory($category6);
        //
        //
        $manager->persist($product7);

        // =====>   PRODUCT 8   <=====

        $product8 = new Product();
        $product8->setName('Banana');
        $product8->setPrice(PHP_INT_MAX);
        $product8->setDescription('Increases intelligence and agility for a fighter immediately and decays over time.');
        $product8->setPath('product8.png');
        $product8->setStock(1000);
        //
        //
        $product8->addCategory($category2);
        $product8->addCategory($category5);
        $product8->addCategory($category6);
        //
        //
        $manager->persist($product8);

        // =====>   PRODUCT 9   <=====

        $product9 = new Product();
        $product9->setName('Peach');
        $product9->setPrice(PHP_INT_MAX);
        $product9->setDescription(
            'Increases strength and intelligence for a fighter immediately and decays over time.'
        );
        $product9->setPath('product9.png');
        $product9->setStock(1000);
        //
        //
        $product9->addCategory($category2);
        $product9->addCategory($category5);
        $product9->addCategory($category6);
        //
        //
        $manager->persist($product9);

        // =====>   PRODUCT 10   <=====

        $product10 = new Product();
        $product10->setName('Kiwi');
        $product10->setPrice(PHP_INT_MAX);
        $product10->setDescription('Increases strength and stamina for a fighter immediately and decays over time.');
        $product10->setPath('product10.png');
        $product10->setStock(1000);
        //
        //
        $product10->addCategory($category2);
        $product10->addCategory($category5);
        $product10->addCategory($category6);
        //
        //
        $manager->persist($product10);

        // =====>   PRODUCT 11   <=====

        $product11 = new Product();
        $product11->setName('Tomato Soup');
        $product11->setPrice(PHP_INT_MAX);
        $product11->setDescription('Increases basic stats for a fighter immediately and decays over time.');
        $product11->setPath('product11.png');
        $product11->setStock(1000);
        //
        //
        $product11->addCategory($category2);
        $product11->addCategory($category6);
        //
        //
        $manager->persist($product11);

        // =====>   PRODUCT 12   <=====

        $product12 = new Product();
        $product12->setName('Orange Juice');
        $product12->setPrice(PHP_INT_MAX);
        $product12->setDescription('Increases basic stats for a fighter immediately and decays over time.');
        $product12->setPath('product12.png');
        $product12->setStock(1000);
        //
        //
        $product12->addCategory($category2);
        $product12->addCategory($category6);
        //
        //
        $manager->persist($product12);

        // =====>   PRODUCT 13   <=====

        $product13 = new Product();
        $product13->setName('Cheese Pie');
        $product13->setPrice(PHP_INT_MAX);
        $product13->setDescription('Increases basic stats for a fighter immediately and decays over time.');
        $product13->setPath('product13.png');
        $product13->setStock(1000);
        //
        //
        $product13->addCategory($category2);
        $product13->addCategory($category6);
        //
        //
        $manager->persist($product13);

        // =====>   PRODUCT 14   <=====

        $product14 = new Product();
        $product14->setName('Perch');
        $product14->setPrice(PHP_INT_MAX);
        $product14->setDescription('Increases basic stats for a fighter immediately and decays over time.');
        $product14->setPath('product14.png');
        $product14->setStock(1000);
        //
        //
        $product14->addCategory($category2);
        $product14->addCategory($category6);
        //
        //
        $manager->persist($product14);

        // =====>   PRODUCT 15   <=====

        $product15 = new Product();
        $product15->setName('Salad');
        $product15->setPrice(PHP_INT_MAX);
        $product15->setDescription('Increases basic stats for a fighter immediately and decays over time.');
        $product15->setPath('product15.png');
        $product15->setStock(1000);
        //
        //
        $product15->addCategory($category2);
        $product15->addCategory($category6);
        //
        //
        $manager->persist($product15);

        // =====>   PRODUCT 16   <=====

        $product16 = new Product();
        $product16->setName('Bread');
        $product16->setPrice(PHP_INT_MAX);
        $product16->setDescription('Increases basic stats for a fighter immediately and decays over time.');
        $product16->setPath('product16.png');
        $product16->setStock(1000);
        //
        //
        $product16->addCategory($category2);
        $product16->addCategory($category6);
        //
        //
        $manager->persist($product16);

        // =====>   PRODUCT 17   <=====

        $product17 = new Product();
        $product17->setName('Pasta');
        $product17->setPrice(PHP_INT_MAX);
        $product17->setDescription('Greatly increases strength for a fighter immediately and decays over time.');
        $product17->setPath('product17.png');
        $product17->setStock(1000);
        //
        //
        $product17->addCategory($category2);
        $product17->addCategory($category5);
        $product17->addCategory($category6);
        //
        //
        $manager->persist($product17);

        // =====>   PRODUCT 18   <=====

        $product18 = new Product();
        $product18->setName('Steak');
        $product18->setPrice(PHP_INT_MAX);
        $product18->setDescription('Greatly increases intelligence for a fighter immediately and decays over time.');
        $product18->setPath('product18.png');
        $product18->setStock(1000);
        //
        //
        $product18->addCategory($category2);
        $product18->addCategory($category5);
        $product18->addCategory($category6);
        //
        //
        $manager->persist($product18);

        // =====>   PRODUCT 19   <=====

        $product19 = new Product();
        $product19->setName('Pizza');
        $product19->setPrice(PHP_INT_MAX);
        $product19->setDescription('Greatly increases agility for a fighter immediately and decays over time.');
        $product19->setPath('product19.png');
        $product19->setStock(1000);
        //
        //
        $product19->addCategory($category2);
        $product19->addCategory($category5);
        $product19->addCategory($category6);
        //
        //
        $manager->persist($product19);

        // =====>   PRODUCT 20   <=====

        $product20 = new Product();
        $product20->setName('Lasagna');
        $product20->setPrice(PHP_INT_MAX);
        $product20->setDescription('Greatly increases stamina for a fighter immediately and decays over time.');
        $product20->setPath('product20.png');
        $product20->setStock(1000);
        //
        //
        $product20->addCategory($category2);
        $product20->addCategory($category5);
        $product20->addCategory($category6);
        //
        //
        $manager->persist($product20);

        /////////////////////////////////////////////// END OF CONSUMABLES

        // =====>   PRODUCT 21   <=====

        $product21 = new Subscription();
        $product21->setName('Blood forest');
        $product21->setPrice(PHP_INT_MAX);
        $product21->setDescription('Train your strength by facing extremely dangerous creatures.');
        $product21->setPath('product21.png');
        $product21->setStock(500);
        //
        //
        $product21->addCategory($category3);
        $product21->addCategory($category4);
        $product21->addCategory($category5);
        //
        //
        $manager->persist($product21);

        // =====>   PRODUCT 22   <=====

        $product22 = new Subscription();
        $product22->setName('Gates of infinity');
        $product22->setPrice(PHP_INT_MAX);
        $product22->setDescription('Fight with the deadliest monsters that live within the lake.');
        $product22->setPath('product22.png');
        $product22->setStock(400);
        //
        //
        $product22->addCategory($category3);
        $product22->addCategory($category5);
        $product21->addCategory($category6);
        //
        //
        $manager->persist($product22);

        // =====>   PRODUCT 23   <=====

        $product23 = new Subscription();
        $product23->setName('Devil\'s portal');
        $product23->setPrice(PHP_INT_MAX);
        $product23->setDescription('Face the power of evil and fight for returning back to life.');
        $product23->setPath('product23.png');
        $product23->setStock(300);
        //
        //
        $product23->addCategory($category3);
        $product23->addCategory($category6);
        //
        //
        $manager->persist($product23);

        // =====>   PRODUCT 24   <=====

        $product24 = new Subscription();
        $product24->setName('Atlantis');
        $product24->setPrice(PHP_INT_MAX);
        $product24->setDescription('Reach a new level of skill by defeating water creatures.');
        $product24->setPath('product24.png');
        $product24->setStock(300);
        //
        //
        $product24->addCategory($category3);
        $product24->addCategory($category5);
        $product24->addCategory($category6);
        //
        //
        $manager->persist($product24);

        // =====>   PRODUCT 25   <=====

        $product25 = new Subscription();
        $product25->setName('Underworld Castle');
        $product25->setPrice(PHP_INT_MAX);
        $product25->setDescription('Prepare to reach the top of world\'s scariest castle.');
        $product25->setPath('product25.png');
        $product25->setStock(300);
        //
        //
        $product25->addCategory($category3);
        $product25->addCategory($category5);
        $product25->addCategory($category6);
        //
        //
        $manager->persist($product25);

        // =====>   PRODUCT 26   <=====

        $product26 = new Subscription();
        $product26->setName('The Haunted Tomb');
        $product26->setPrice(PHP_INT_MAX);
        $product26->setDescription('Follow the light and may the force be with you.');
        $product26->setPath('product26.png');
        $product26->setStock(300);
        //
        //
        $product26->addCategory($category3);
        $product26->addCategory($category5);
        $product26->addCategory($category6);
        //
        //
        $manager->persist($product26);

        // =====>   PRODUCT 27   <=====

        $product27 = new Subscription();
        $product27->setName('Voodoo Temple');
        $product27->setPrice(PHP_INT_MAX);
        $product27->setDescription('Become a Voodoo witch by mastering the arts of destruction.');
        $product27->setPath('product27.png');
        $product27->setStock(300);
        //
        //
        $product27->addCategory($category3);
        $product27->addCategory($category5);
        $product27->addCategory($category6);
        //
        //
        $manager->persist($product27);

        // =====>   PRODUCT 28   <=====

        $product28 = new Subscription();
        $product28->setName('Ninja temple');
        $product28->setPrice(PHP_INT_MAX);
        $product28->setDescription('Learn a new set of skills by fighting with the ninjas.');
        $product28->setPath('product28.png');
        $product28->setStock(300);
        //
        //
        $product28->addCategory($category3);
        $product28->addCategory($category6);
        //
        //
        $manager->persist($product28);

        // =====>   PRODUCT 29   <=====

        $product29 = new Subscription();
        $product29->setName('High Gardens');
        $product29->setPrice(PHP_INT_MAX);
        $product29->setDescription('Train yourself in the highest place in the world. The air there is very thin.');
        $product29->setPath('product29.png');
        $product29->setStock(300);
        //
        //
        $product29->addCategory($category3);
        $product29->addCategory($category6);
        //
        //
        $manager->persist($product29);

        // =====>   PRODUCT 30   <=====

        $product30 = new Subscription();
        $product30->setName('Summoner\'s Rift');
        $product30->setPrice(PHP_INT_MAX);
        $product30->setDescription('Learn to fight as a summoner by defeating the world\'s most feared demons.');
        $product30->setPath('product30.png');
        $product30->setStock(300);
        //
        //
        $product30->addCategory($category3);
        $product30->addCategory($category5);
        $product30->addCategory($category6);
        //
        //
        $manager->persist($product30);

        ////////////////////////////// END OF SUBSCRIPTIONS

        // =====>   PRODUCT 31   <=====

        $product31 = new Fighter();
        $product31->setName('Shahraz');
        $product31->setPrice(PHP_INT_MAX);
        $product31->setDescription('The demon queen');
        $product31->setPath('product31.png');
        $product31->setStock(1);
        //
        //
        $product31->addCategory($category1);
        $product31->addCategory($category4);
        $product31->addCategory($category5);
        $product31->addCategory($category6);
        //
        //
        $manager->persist($product31);

        // =====>   PRODUCT 32   <=====

        $product32 = new Fighter();
        $product32->setName('Zeratul');
        $product32->setPrice(PHP_INT_MAX);
        $product32->setDescription('Shadow Assassin');
        $product32->setPath('product32.png');
        $product32->setStock(1);
        //
        //
        $product32->addCategory($category1);
        $product32->addCategory($category4);
        $product32->addCategory($category5);
        $product32->addCategory($category6);
        //
        //
        $manager->persist($product32);

        // =====>   PRODUCT 33   <=====

        $product33 = new Fighter();
        $product33->setName('Medivh');
        $product33->setDescription('Ancient Archmage');
        $product33->setPrice(PHP_INT_MAX);
        $product33->setPath('product33.png');
        $product33->setStock(1);
        //
        //
        $product33->addCategory($category1);
        $product33->addCategory($category4);
        $product33->addCategory($category5);
        $product33->addCategory($category6);
        //
        //
        $manager->persist($product33);

        // =====>   PRODUCT 34   <=====

        $product34 = new Fighter();
        $product34->setName('Zed');
        $product34->setDescription('Master of shadows');
  
        $product34->setPrice(PHP_INT_MAX);
        $product34->setPath('product34.png');
        $product34->setStock(1);
        //
        //
        $product34->addCategory($category1);
        $product34->addCategory($category4);
        $product34->addCategory($category5);
        $product34->addCategory($category6);
        //
        //
        $manager->persist($product34);

        // =====>   PRODUCT 35   <=====

        $product35 = new Fighter();
        $product35->setName('Dr. Boom');
        $product35->setDescription('Explosion master');
        $product35->setPrice(PHP_INT_MAX);
        $product35->setPath('product35.png');
        $product35->setStock(1);
        //
        //
        $product35->addCategory($category1);
        $product35->addCategory($category4);
        $product35->addCategory($category5);
        $product35->addCategory($category6);
        //
        //
        $manager->persist($product35);

        // =====>   PRODUCT 36   <=====

        $product36 = new Fighter();
        $product36->setName('Eydis Darkbane');
        $product36->setDescription('Dark archangel');
        $product36->setPrice(PHP_INT_MAX);
        $product36->setPath('product36.png');
        $product36->setStock(1);
        //
        //
        $product36->addCategory($category1);
        $product36->addCategory($category4);
        $product36->addCategory($category5);
        $product36->addCategory($category6);
        //
        //
        $manager->persist($product36);

        // =====>   PRODUCT 37   <=====

        $product37 = new Fighter();
        $product37->setName('Nefarius');
        $product37->setDescription('The dragon king');
        $product37->setPrice(PHP_INT_MAX);
        $product37->setPath('product37.png');
        $product37->setStock(1);
        //
        //
        $product37->addCategory($category1);
        $product37->addCategory($category4);
        $product37->addCategory($category5);
        $product37->addCategory($category6);
        //
        //
        $manager->persist($product37);

        // =====>   PRODUCT 38   <=====

        $product38 = new Fighter();
        $product38->setName('Gluth');
        $product38->setDescription('Giant devourer');
        $product38->setPrice(PHP_INT_MAX);
        $product38->setPath('product38.png');
        $product38->setStock(1);
        //
        //
        $product38->addCategory($category1);
        $product38->addCategory($category4);
        $product38->addCategory($category5);
        $product38->addCategory($category6);
        //
        //
        $manager->persist($product38);

        // =====>   PRODUCT 39   <=====

        $product39 = new Fighter();
        $product39->setName('Thalnos');
        $product39->setDescription('Skeletal Bloodmage');
        $product39->setPrice(PHP_INT_MAX);
        $product39->setPath('product39.png');
        $product39->setStock(1);
        //
        //
        $product39->addCategory($category1);
        $product39->addCategory($category4);
        $product39->addCategory($category5);
        $product39->addCategory($category6);
        //
        //
        $manager->persist($product39);

        // =====>   PRODUCT 40   <=====

        $product40 = new Fighter();
        $product40->setName('Algalon');
        $product40->setDescription('The Observer');
        $product40->setPrice(PHP_INT_MAX);
        $product40->setPath('product40.png');
        $product40->setStock(1);
        //
        //
        $product40->addCategory($category1);
        $product40->addCategory($category4);
        $product40->addCategory($category5);
        $product40->addCategory($category6);
        //
        //
        $manager->persist($product40);

        // =====>   PRODUCT 41   <=====

        $product41 = new Fighter();
        $product41->setName('Archimonde');
        $product41->setDescription('The Defiler');
        $product41->setPrice(PHP_INT_MAX);
        $product41->setPath('product41.png');
        $product41->setStock(1);
        //
        //
        $product41->addCategory($category1);
        $product41->addCategory($category4);
        $product41->addCategory($category5);
        $product41->addCategory($category6);
        //
        //
        $manager->persist($product41);

        // =====>   PRODUCT 42   <=====

        $product42 = new Fighter();
        $product42->setName('Antonidas');
        $product42->setDescription('The Battlemage');
        $product42->setPrice(PHP_INT_MAX);
        $product42->setPath('product42.png');
        $product42->setStock(1);
        //
        //
        $product42->addCategory($category1);
        $product42->addCategory($category4);
        $product42->addCategory($category5);
        $product42->addCategory($category6);
        //
        //
        $manager->persist($product42);

        // =====>   PRODUCT 43   <=====

        $product43 = new Fighter();
        $product43->setName('Arthas');
        $product43->setDescription('The Fallen Prince');
        $product43->setPrice(PHP_INT_MAX);
        $product43->setPath('product43.png');
        $product43->setStock(1);
        //
        //
        $product43->addCategory($category1);
        $product43->addCategory($category4);
        $product43->addCategory($category5);
        $product43->addCategory($category6);
        //
        //
        $manager->persist($product43);

        // =====>   PRODUCT 44   <=====

        $product44 = new Fighter();
        $product44->setName('Shazar');
        $product44->setDescription('The Demonologist');
        $product44->setPrice(PHP_INT_MAX);
        $product44->setPath('product44.png');
        $product44->setStock(1);
        //
        //
        $product44->addCategory($category1);
        $product44->addCategory($category4);
        $product44->addCategory($category5);
        $product44->addCategory($category6);
        //
        //
        $manager->persist($product44);

        // =====>   PRODUCT 45   <=====

        $product45 = new Fighter();
        $product45->setName('Bolvar');
        $product45->setDescription('Enlightened Champion');
        $product45->setPrice(PHP_INT_MAX);
        $product45->setPath('product45.png');
        $product45->setStock(1);
        //
        //
        $product45->addCategory($category1);
        $product45->addCategory($category4);
        $product45->addCategory($category5);
        $product45->addCategory($category6);
        //
        //
        $manager->persist($product45);

        // =====>   PRODUCT 46   <=====

        $product46 = new Fighter();
        $product46->setName('Cairne');
        $product46->setDescription('Tauren Leader');
        $product46->setPrice(PHP_INT_MAX);
        $product46->setPath('product46.png');
        $product46->setStock(1);
        //
        //
        $product46->addCategory($category1);
        $product46->addCategory($category4);
        $product46->addCategory($category5);
        $product46->addCategory($category6);
        //
        //
        $manager->persist($product46);

        // =====>   PRODUCT 47   <=====

        $product47 = new Fighter();
        $product47->setName('Grommash');
        $product47->setDescription('Fallen Warchief');
        $product47->setPrice(PHP_INT_MAX);
        $product47->setPath('product47.png');
        $product47->setStock(1);
        //
        //
        $product47->addCategory($category1);
        $product47->addCategory($category4);
        $product47->addCategory($category5);
        $product47->addCategory($category6);
        //
        //
        $manager->persist($product47);

        // =====>   PRODUCT 48   <=====

        $product48 = new Fighter();
        $product48->setName("Kel'Thuzad");
        $product48->setDescription('Prime Lich');
        $product48->setPrice(PHP_INT_MAX);
        $product48->setPath('product48.png');
        $product48->setStock(1);
        //
        //
        $product48->addCategory($category1);
        $product48->addCategory($category4);
        $product48->addCategory($category5);
        $product48->addCategory($category6);
        //
        //
        $manager->persist($product48);

        // =====>   PRODUCT 49   <=====

        $product49 = new Fighter();
        $product49->setName('Tyrael');
        $product49->setDescription('Angel of Justice');
        $product49->setPrice(PHP_INT_MAX);
        $product49->setPath('product49.png');
        $product49->setStock(1);
        //
        //
        $product49->addCategory($category1);
        $product49->addCategory($category4);
        $product49->addCategory($category5);
        $product49->addCategory($category6);
        //
        //
        $manager->persist($product49);

        // =====>  PRODUCT 50    <=====

        $product50 = new Fighter();
        $product50->setName("Diablo");
        $product50->setDescription("The fearbringer");
        $product50->setPrice(PHP_INT_MAX);
        $product50->setPath("product50.png");
        $product50->setStock(1);
        //
        //
        $product50->addCategory($category1);
        $product50->addCategory($category4);
        $product50->addCategory($category5);
        $product50->addCategory($category6);
        //
        //
        $manager->persist($product50);

        // =====>  PRODUCT 51    <=====

        $product51 = new Fighter();
        $product51->setName("Cenarius");
        $product51->setDescription("Keeper of the Grove");
        $product51->setPrice(PHP_INT_MAX);
        $product51->setPath("product51.png");
        $product51->setStock(1);
        //
        //
        $product51->addCategory($category1);
        $product51->addCategory($category4);
        $product51->addCategory($category5);
        $product51->addCategory($category6);
        //
        //
        $manager->persist($product51);

        // =====>  PRODUCT 52    <=====

        $product52 = new Fighter();
        $product52->setName("Lady Deathwhisper");
        $product52->setDescription("The deathbringer");
        $product52->setPrice(PHP_INT_MAX);
        $product52->setPath("product52.png");
        $product52->setStock(1);
        //
        //
        $product52->addCategory($category1);
        $product52->addCategory($category4);
        $product52->addCategory($category5);
        $product52->addCategory($category6);
        //
        //
        $manager->persist($product52);

        // =====>  PRODUCT 53    <=====

        $product53 = new Fighter();
        $product53->setName("Blackheart");
        $product53->setDescription("Pirate Captain");
        $product53->setPrice(PHP_INT_MAX);
        $product53->setPath("product53.png");
        $product53->setStock(1);
        //
        //
        $product53->addCategory($category1);
        $product53->addCategory($category4);
        $product53->addCategory($category5);
        $product53->addCategory($category6);
        //
        //
        $manager->persist($product53);

        // =====>  PRODUCT 54    <=====

        $product54 = new Fighter();
        $product54->setName("Yogg'Saron");
        $product54->setDescription("God of hatred");
        $product54->setPrice(PHP_INT_MAX);
        $product54->setPath("product54.png");
        $product54->setStock(1);
        //
        //
        $product54->addCategory($category1);
        $product54->addCategory($category4);
        $product54->addCategory($category5);
        $product54->addCategory($category6);
        //
        //
        $manager->persist($product54);

        // =====>  PRODUCT 55    <=====

        $product55 = new Fighter();
        $product55->setName("Maiev Shadowsong");
        $product55->setDescription("The warden");
        $product55->setPrice(PHP_INT_MAX);
        $product55->setPath("product55.png");
        $product55->setStock(1);
        //
        //
        $product55->addCategory($category1);
        $product55->addCategory($category4);
        $product55->addCategory($category5);
        $product55->addCategory($category6);
        //
        //
        $manager->persist($product55);

        // =====>  PRODUCT 56    <=====

        $product56 = new Fighter();
        $product56->setName("Emperor Jarvan");
        $product56->setDescription("Saint of War");
        $product56->setPrice(PHP_INT_MAX);
        $product56->setPath("product56.png");
        $product56->setStock(1);
        //
        //
        $product56->addCategory($category1);
        $product56->addCategory($category4);
        $product56->addCategory($category5);
        $product56->addCategory($category6);
        //
        //
        $manager->persist($product56);

        // =====>  PRODUCT 57    <=====

        $product57 = new Fighter();
        $product57->setName("Riven");
        $product57->setDescription("The Ghost Sword");
        $product57->setPrice(PHP_INT_MAX);
        $product57->setPath("product57.png");
        $product57->setStock(1);
        //
        //
        $product57->addCategory($category1);
        $product57->addCategory($category4);
        $product57->addCategory($category5);
        $product57->addCategory($category6);
        //
        //
        $manager->persist($product57);

        // =====>  PRODUCT 58    <=====

        $product58 = new Fighter();
        $product58->setName("Fel Reaver");
        $product58->setDescription("Mechanical Demon");
        $product58->setPrice(PHP_INT_MAX);
        $product58->setPath("product58.png");
        $product58->setStock(1);
        //
        //
        $product58->addCategory($category1);
        $product58->addCategory($category4);
        $product58->addCategory($category5);
        $product58->addCategory($category6);
        //
        //
        $manager->persist($product58);

        // =====>  PRODUCT 59    <=====

        $product59 = new Fighter();
        $product59->setName("Felguard");
        $product59->setDescription("The Destroyer");
        $product59->setPrice(PHP_INT_MAX);
        $product59->setPath("product59.png");
        $product59->setStock(1);
        //
        //
        $product59->addCategory($category1);
        $product59->addCategory($category4);
        $product59->addCategory($category5);
        $product59->addCategory($category6);
        //
        //
        $manager->persist($product59);

        // =====>  PRODUCT 60    <=====

        $product60 = new Fighter();
        $product60->setName("Kael'Thas");
        $product60->setDescription("The blood prince");
        $product60->setPrice(PHP_INT_MAX);
        $product60->setPath("product60.png");
        $product60->setStock(1);
        //
        //
        $product60->addCategory($category1);
        $product60->addCategory($category4);
        $product60->addCategory($category5);
        $product60->addCategory($category6);
        //
        //
        $manager->persist($product60);

        // =====>  PRODUCT 61    <=====

        $product61 = new Fighter();
        $product61->setName("Garr");
        $product61->setDescription("The Stone Golem");
        $product61->setPrice(PHP_INT_MAX);
        $product61->setPath("product61.png");
        $product61->setStock(1);
        //
        //
        $product61->addCategory($category1);
        $product61->addCategory($category4);
        $product61->addCategory($category5);
        $product61->addCategory($category6);
        //
        //
        $manager->persist($product61);

        // =====>  PRODUCT 62    <=====

        $product62 = new Fighter();
        $product62->setName("Grobbulus");
        $product62->setDescription("Slime Abomination");
        $product62->setPrice(PHP_INT_MAX);
        $product62->setPath("product62.png");
        $product62->setStock(1);
        //
        //
        $product62->addCategory($category1);
        $product62->addCategory($category4);
        $product62->addCategory($category5);
        $product62->addCategory($category6);
        //
        //
        $manager->persist($product62);

        // =====>  PRODUCT 63    <=====

        $product63 = new Fighter();
        $product63->setName("Gul'Dan");
        $product63->setDescription("The Warlock");
        $product63->setPrice(PHP_INT_MAX);
        $product63->setPath("product63.png");
        $product63->setStock(1);
        //
        //
        $product63->addCategory($category1);
        $product63->addCategory($category4);
        $product63->addCategory($category5);
        $product63->addCategory($category6);
        //
        //
        $manager->persist($product63);

        // =====>  PRODUCT 64    <=====

        $product64 = new Fighter();
        $product64->setName("Illidan");
        $product64->setDescription("The Betrayer");
        $product64->setPrice(PHP_INT_MAX);
        $product64->setPath("product64.png");
        $product64->setStock(1);
        //
        //
        $product64->addCategory($category1);
        $product64->addCategory($category4);
        $product64->addCategory($category5);
        $product64->addCategory($category6);
        //
        //
        $manager->persist($product64);

        // =====>  PRODUCT 65    <=====

        $product65 = new Fighter();
        $product65->setName("Irelia");
        $product65->setDescription("The Nightblade");
        $product65->setPrice(PHP_INT_MAX);
        $product65->setPath("product65.png");
        $product65->setStock(1);
        //
        //
        $product65->addCategory($category1);
        $product65->addCategory($category4);
        $product65->addCategory($category5);
        $product65->addCategory($category6);
        //
        //
        $manager->persist($product65);

        // =====>  PRODUCT 66    <=====

        $product66 = new Fighter();
        $product66->setName("The Poelord");
        $product66->setDescription("Spectral Haunter");
        $product66->setPrice(PHP_INT_MAX);
        $product66->setPath("product66.png");
        $product66->setStock(1);
        //
        //
        $product66->addCategory($category1);
        $product66->addCategory($category4);
        $product66->addCategory($category5);
        $product66->addCategory($category6);
        //
        //
        $manager->persist($product66);

        // =====>  PRODUCT 67    <=====

        $product67 = new Fighter();
        $product67->setName("Cho'Gall");
        $product67->setDescription("Void Destroyer");
        $product67->setPrice(PHP_INT_MAX);
        $product67->setPath("product67.png");
        $product67->setStock(1);
        //
        //
        $product67->addCategory($category1);
        $product67->addCategory($category4);
        $product67->addCategory($category5);
        $product67->addCategory($category6);
        //
        //
        $manager->persist($product67);

        // =====>  PRODUCT 68    <=====

        $product68 = new Fighter();
        $product68->setName("Karthus");
        $product68->setDescription("The Soulflayer");
        $product68->setPrice(PHP_INT_MAX);
        $product68->setPath("product68.png");
        $product68->setStock(1);
        //
        //
        $product68->addCategory($category1);
        $product68->addCategory($category4);
        $product68->addCategory($category5);
        $product68->addCategory($category6);
        //
        //
        $manager->persist($product68);

        // =====>  PRODUCT 69    <=====

        $product69 = new Fighter();
        $product69->setName("Juggernaut");
        $product69->setDescription("Savage Combatant");
        $product69->setPrice(PHP_INT_MAX);
        $product69->setPath("product69.png");
        $product69->setStock(1);
        //
        //
        $product69->addCategory($category1);
        $product69->addCategory($category4);
        $product69->addCategory($category5);
        $product69->addCategory($category6);
        //
        //
        $manager->persist($product69);

        // =====>  PRODUCT 70    <=====

        $product70 = new Fighter();
        $product70->setName("Lady Vashj");
        $product70->setDescription("The sea witch");
        $product70->setPrice(PHP_INT_MAX);
        $product70->setPath("product70.png");
        $product70->setStock(1);
        //
        //
        $product70->addCategory($category1);
        $product70->addCategory($category4);
        $product70->addCategory($category5);
        $product70->addCategory($category6);
        //
        //
        $manager->persist($product70);

        // =====>  PRODUCT 71    <=====

        $product71 = new Fighter();
        $product71->setName("Leona");
        $product71->setDescription("The Sunblade");
        $product71->setPrice(PHP_INT_MAX);
        $product71->setPath("product71.png");
        $product71->setStock(1);
        //
        //
        $product71->addCategory($category1);
        $product71->addCategory($category4);
        $product71->addCategory($category5);
        $product71->addCategory($category6);
        //
        //
        $manager->persist($product71);

        // =====>  PRODUCT 72    <=====

        $product72 = new Fighter();
        $product72->setName("Lich King");
        $product72->setDescription("King of the North");
        $product72->setPrice(PHP_INT_MAX);
        $product72->setPath("product72.png");
        $product72->setStock(1);
        //
        //
        $product72->addCategory($category1);
        $product72->addCategory($category4);
        $product72->addCategory($category5);
        $product72->addCategory($category6);
        //
        //
        $manager->persist($product72);

        // =====>  PRODUCT 73    <=====

        $product73 = new Fighter();
        $product73->setName("Lucifron");
        $product73->setDescription("Flame Corruptor");
        $product73->setPrice(PHP_INT_MAX);
        $product73->setPath("product73.png");
        $product73->setStock(1);
        //
        //
        $product73->addCategory($category1);
        $product73->addCategory($category4);
        $product73->addCategory($category5);
        $product73->addCategory($category6);
        //
        //
        $manager->persist($product73);

        // =====>  PRODUCT 74    <=====

        $product74 = new Fighter();
        $product74->setName("Magtheridon");
        $product74->setDescription("Ruler of the Black Temple");
        $product74->setPrice(PHP_INT_MAX);
        $product74->setPath("product74.png");
        $product74->setStock(1);
        //
        //
        $product74->addCategory($category1);
        $product74->addCategory($category4);
        $product74->addCategory($category5);
        $product74->addCategory($category6);
        //
        //
        $manager->persist($product74);

        // =====>  PRODUCT 75    <=====

        $product75 = new Fighter();
        $product75->setName("Mal'Ganis");
        $product75->setDescription("The Dreadlord");
        $product75->setPrice(PHP_INT_MAX);
        $product75->setPath("product75.png");
        $product75->setStock(1);
        //
        //
        $product75->addCategory($category1);
        $product75->addCategory($category4);
        $product75->addCategory($category5);
        $product75->addCategory($category6);
        //
        //
        $manager->persist($product75);

        // =====>  PRODUCT 76    <=====

        $product76 = new Fighter();
        $product76->setName("Malfurion");
        $product76->setDescription("Ancient of the forest");
        $product76->setPrice(PHP_INT_MAX);
        $product76->setPath("product76.png");
        $product76->setStock(1);
        //
        //
        $product76->addCategory($category1);
        $product76->addCategory($category4);
        $product76->addCategory($category5);
        $product76->addCategory($category6);
        //
        //
        $manager->persist($product76);

        // =====>  PRODUCT 77    <=====

        $product77 = new Fighter();
        $product77->setName("Mannoroth");
        $product77->setDescription("The Pit Lord");
        $product77->setPrice(PHP_INT_MAX);
        $product77->setPath("product77.png");
        $product77->setStock(1);
        //
        //
        $product77->addCategory($category1);
        $product77->addCategory($category4);
        $product77->addCategory($category5);
        $product77->addCategory($category6);
        //
        //
        $manager->persist($product77);

        // =====>  PRODUCT 78    <=====

        $product78 = new Fighter();
        $product78->setName("Naj'Entus");
        $product78->setDescription("Naga Royal Guard");
        $product78->setPrice(PHP_INT_MAX);
        $product78->setPath("product78.png");
        $product78->setStock(1);
        //
        //
        $product78->addCategory($category1);
        $product78->addCategory($category4);
        $product78->addCategory($category5);
        $product78->addCategory($category6);
        //
        //
        $manager->persist($product78);

        // =====>  PRODUCT 79    <=====

        $product79 = new Fighter();
        $product79->setName("Naga Siren");
        $product79->setDescription("Cursed Sorcress");
        $product79->setPrice(PHP_INT_MAX);
        $product79->setPath("product79.png");
        $product79->setStock(1);
        //
        //
        $product79->addCategory($category1);
        $product79->addCategory($category4);
        $product79->addCategory($category5);
        $product79->addCategory($category6);
        //
        //
        $manager->persist($product79);

        // =====>  PRODUCT 80    <=====

        $product80 = new Fighter();
        $product80->setName("Garrosh");
        $product80->setDescription("The Warchief");
        $product80->setPrice(PHP_INT_MAX);
        $product80->setPath("product80.png");
        $product80->setStock(1);
        //
        //
        $product80->addCategory($category1);
        $product80->addCategory($category4);
        $product80->addCategory($category5);
        $product80->addCategory($category6);
        //
        //
        $manager->persist($product80);

        // =====>  PRODUCT 81    <=====

        $product81 = new Fighter();
        $product81->setName("Queen Aszara");
        $product81->setDescription("The Naga Queen");
        $product81->setPrice(PHP_INT_MAX);
        $product81->setPath("product81.png");
        $product81->setStock(1);
        //
        //
        $product81->addCategory($category1);
        $product81->addCategory($category4);
        $product81->addCategory($category5);
        $product81->addCategory($category6);
        //
        //
        $manager->persist($product81);

        // =====>  PRODUCT 82    <=====

        $product82 = new Fighter();
        $product82->setName("Ragnaros");
        $product82->setDescription("The Firelord");
        $product82->setPrice(PHP_INT_MAX);
        $product82->setPath("product82.png");
        $product82->setStock(1);
        //
        //
        $product82->addCategory($category1);
        $product82->addCategory($category4);
        $product82->addCategory($category5);
        $product82->addCategory($category6);
        //
        //
        $manager->persist($product82);

        // =====>  PRODUCT 83    <=====

        $product83 = new Fighter();
        $product83->setName("Rexxar");
        $product83->setDescription("The Beastmaster");
        $product83->setPrice(PHP_INT_MAX);
        $product83->setPath("product83.png");
        $product83->setStock(1);
        //
        //
        $product83->addCategory($category1);
        $product83->addCategory($category4);
        $product83->addCategory($category5);
        $product83->addCategory($category6);
        //
        //
        $manager->persist($product83);

        // =====>  PRODUCT 84    <=====

        $product84 = new Fighter();
        $product84->setName("Rhonin");
        $product84->setDescription("The Secretkreeper");
        $product84->setPrice(PHP_INT_MAX);
        $product84->setPath("product84.png");
        $product84->setStock(1);
        //
        //
        $product84->addCategory($category1);
        $product84->addCategory($category4);
        $product84->addCategory($category5);
        $product84->addCategory($category6);
        //
        //
        $manager->persist($product84);

        // =====>  PRODUCT 85    <=====

        $product85 = new Fighter();
        $product85->setName("Sargeras");
        $product85->setDescription("Demon Titan");
        $product85->setPrice(PHP_INT_MAX);
        $product85->setPath("product85.png");
        $product85->setStock(1);
        //
        //
        $product85->addCategory($category1);
        $product85->addCategory($category4);
        $product85->addCategory($category5);
        $product85->addCategory($category6);
        //
        //
        $manager->persist($product85);

        // =====>  PRODUCT 86    <=====

        $product86 = new Fighter();
        $product86->setName("Thrall");
        $product86->setDescription("Master Shaman");
        $product86->setPrice(PHP_INT_MAX);
        $product86->setPath("product86.png");
        $product86->setStock(1);
        //
        //
        $product86->addCategory($category1);
        $product86->addCategory($category4);
        $product86->addCategory($category5);
        $product86->addCategory($category6);
        //
        //
        $manager->persist($product86);

        // =====>  PRODUCT 87    <=====

        $product87 = new Fighter();
        $product87->setName("Sylvannas");
        $product87->setDescription("Banshee Queen");
        $product87->setPrice(PHP_INT_MAX);
        $product87->setPath("product87.png");
        $product87->setStock(1);
        //
        //
        $product87->addCategory($category1);
        $product87->addCategory($category4);
        $product87->addCategory($category5);
        $product87->addCategory($category6);
        //
        //
        $manager->persist($product87);

        // =====>  PRODUCT 88    <=====

        $product88 = new Fighter();
        $product88->setName("Patchwerk");
        $product88->setDescription("The Butcher");
        $product88->setPrice(PHP_INT_MAX);
        $product88->setPath("product88.png");
        $product88->setStock(1);
        //
        //
        $product88->addCategory($category1);
        $product88->addCategory($category4);
        $product88->addCategory($category5);
        $product88->addCategory($category6);
        //
        //
        $manager->persist($product88);

        // =====>  PRODUCT 89    <=====

        $product89 = new Fighter();
        $product89->setName("Thaddius");
        $product89->setDescription("Undead Titan");
        $product89->setPrice(PHP_INT_MAX);
        $product89->setPath("product89.png");
        $product89->setStock(1);
        //
        //
        $product89->addCategory($category1);
        $product89->addCategory($category4);
        $product89->addCategory($category5);
        $product89->addCategory($category6);
        //
        //
        $manager->persist($product89);

        // =====>  PRODUCT 90    <=====

        $product90 = new Fighter();
        $product90->setName("Bongo Bongo");
        $product90->setDescription("Shadowstalker");
        $product90->setPrice(PHP_INT_MAX);
        $product90->setPath("product90.png");
        $product90->setStock(1);
        //
        //
        $product90->addCategory($category1);
        $product90->addCategory($category4);
        $product90->addCategory($category5);
        $product90->addCategory($category6);
        //
        //
        $manager->persist($product90);

        // =====>  PRODUCT 91    <=====

        $product91 = new Fighter();
        $product91->setName("Uther");
        $product91->setDescription("The Paladin");
        $product91->setPrice(PHP_INT_MAX);
        $product91->setPath("product91.png");
        $product91->setStock(1);
        //
        //
        $product91->addCategory($category1);
        $product91->addCategory($category4);
        $product91->addCategory($category5);
        $product91->addCategory($category6);
        //
        //
        $manager->persist($product91);

        // =====>  PRODUCT 92    <=====

        $product92 = new Fighter();
        $product92->setName("Varian Wrynn");
        $product92->setDescription("King of Stormwind");
        $product92->setPrice(PHP_INT_MAX);
        $product92->setPath("product92.png");
        $product92->setStock(1);
        //
        //
        $product92->addCategory($category1);
        $product92->addCategory($category4);
        $product92->addCategory($category5);
        $product92->addCategory($category6);
        //
        //
        $manager->persist($product92);

        // =====>  PRODUCT 93    <=====

        $product93 = new Fighter();
        $product93->setName("Grim Patron");
        $product93->setDescription("The Dragonslayer");
        $product93->setPrice(PHP_INT_MAX);
        $product93->setPath("product93.png");
        $product93->setStock(1);
        //
        //
        $product93->addCategory($category1);
        $product93->addCategory($category4);
        $product93->addCategory($category5);
        $product93->addCategory($category6);
        //
        //
        $manager->persist($product93);

        // =====>  PRODUCT 94    <=====

        $product94 = new Fighter();
        $product94->setName("Vol'Jin");
        $product94->setDescription("Shadow Hunter");
        $product94->setPrice(PHP_INT_MAX);
        $product94->setPath("product94.png");
        $product94->setStock(1);
        //
        //
        $product94->addCategory($category1);
        $product94->addCategory($category4);
        $product94->addCategory($category5);
        $product94->addCategory($category6);
        //
        //
        $manager->persist($product94);

        // =====>  PRODUCT 95    <=====

        $product95 = new Fighter();
        $product95->setName("Hydros");
        $product95->setDescription("The Water Elemental");
        $product95->setPrice(PHP_INT_MAX);
        $product95->setPath("product95.png");
        $product95->setStock(1);
        //
        //
        $product95->addCategory($category1);
        $product95->addCategory($category4);
        $product95->addCategory($category5);
        $product95->addCategory($category6);
        //
        //
        $manager->persist($product95);

        // =====>  PRODUCT 96    <=====

        $product96 = new Fighter();
        $product96->setName("C'Thun");
        $product96->setDescription("God of insanity");
        $product96->setPrice(PHP_INT_MAX);
        $product96->setPath("product96.png");
        $product96->setStock(1);
        //
        //
        $product96->addCategory($category1);
        $product96->addCategory($category4);
        $product96->addCategory($category5);
        $product96->addCategory($category6);
        //
        //
        $manager->persist($product96);

        // =====>  PRODUCT 97    <=====

        $product97 = new Fighter();
        $product97->setName("Zant");
        $product97->setDescription("Twilight Prince");
        $product97->setPrice(PHP_INT_MAX);
        $product97->setPath("product97.png");
        $product97->setStock(1);
        //
        //
        $product97->addCategory($category1);
        $product97->addCategory($category4);
        $product97->addCategory($category5);
        $product97->addCategory($category6);
        //
        //
        $manager->persist($product97);

        // =====>  PRODUCT 98    <=====

        $product98 = new Fighter();
        $product98->setName("Alleria");
        $product98->setDescription("The Lost Archer");
        $product98->setPrice(PHP_INT_MAX);
        $product98->setPath("product98.png");
        $product98->setStock(1);
        //
        //
        $product98->addCategory($category1);
        $product98->addCategory($category4);
        $product98->addCategory($category5);
        $product98->addCategory($category6);
        //
        //
        $manager->persist($product98);

        $manager->flush();

        $this->addReference('product-1', $product1);
        $this->addReference('product-2', $product2);
        $this->addReference('product-3', $product3);
        $this->addReference('product-4', $product4);
        $this->addReference('product-5', $product5);
        $this->addReference('product-6', $product6);
        $this->addReference('product-7', $product7);
        $this->addReference('product-8', $product8);
        $this->addReference('product-9', $product9);
        $this->addReference('product-10', $product10);
        $this->addReference('product-11', $product11);
        $this->addReference('product-12', $product12);
        $this->addReference('product-13', $product13);
        $this->addReference('product-14', $product14);
        $this->addReference('product-15', $product15);
        $this->addReference('product-16', $product16);
        $this->addReference('product-17', $product17);
        $this->addReference('product-18', $product18);
        $this->addReference('product-19', $product19);
        $this->addReference('product-20', $product20);
        $this->addReference('product-21', $product21);
        $this->addReference('product-22', $product22);
        $this->addReference('product-23', $product23);
        $this->addReference('product-24', $product24);
        $this->addReference('product-25', $product25);
        $this->addReference('product-26', $product26);
        $this->addReference('product-27', $product27);
        $this->addReference('product-28', $product28);
        $this->addReference('product-29', $product29);
        $this->addReference('product-30', $product30);
        $this->addReference('product-31', $product31);
        $this->addReference('product-32', $product32);
        $this->addReference('product-33', $product33);
        $this->addReference('product-34', $product34);
        $this->addReference('product-35', $product35);
        $this->addReference('product-36', $product36);
        $this->addReference('product-37', $product37);
        $this->addReference('product-38', $product38);
        $this->addReference('product-39', $product39);
        $this->addReference('product-40', $product40);
        $this->addReference('product-41', $product41);
        $this->addReference('product-42', $product42);
        $this->addReference('product-43', $product43);
        $this->addReference('product-44', $product44);
        $this->addReference('product-45', $product45);
        $this->addReference('product-46', $product46);
        $this->addReference('product-47', $product47);
        $this->addReference('product-48', $product48);
        $this->addReference('product-49', $product49);
        $this->addReference('product-50', $product50);
        $this->addReference('product-51', $product51);
        $this->addReference('product-52', $product52);
        $this->addReference('product-53', $product53);
        $this->addReference('product-54', $product54);
        $this->addReference('product-55', $product55);
        $this->addReference('product-56', $product56);
        $this->addReference('product-57', $product57);
        $this->addReference('product-58', $product58);
        $this->addReference('product-59', $product59);
        $this->addReference('product-60', $product60);
        $this->addReference('product-61', $product61);
        $this->addReference('product-62', $product62);
        $this->addReference('product-63', $product63);
        $this->addReference('product-64', $product64);
        $this->addReference('product-65', $product65);
        $this->addReference('product-66', $product66);
        $this->addReference('product-67', $product67);
        $this->addReference('product-68', $product68);
        $this->addReference('product-69', $product69);
        $this->addReference('product-70', $product70);
        $this->addReference('product-71', $product71);
        $this->addReference('product-72', $product72);
        $this->addReference('product-73', $product73);
        $this->addReference('product-74', $product74);
        $this->addReference('product-75', $product75);
        $this->addReference('product-76', $product76);
        $this->addReference('product-77', $product77);
        $this->addReference('product-78', $product78);
        $this->addReference('product-79', $product79);
        $this->addReference('product-80', $product80);
        $this->addReference('product-81', $product81);
        $this->addReference('product-82', $product82);
        $this->addReference('product-83', $product83);
        $this->addReference('product-84', $product84);
        $this->addReference('product-85', $product85);
        $this->addReference('product-86', $product86);
        $this->addReference('product-87', $product87);
        $this->addReference('product-88', $product88);
        $this->addReference('product-89', $product89);
        $this->addReference('product-90', $product90);
        $this->addReference('product-91', $product91);
        $this->addReference('product-92', $product92);
        $this->addReference('product-93', $product93);
        $this->addReference('product-94', $product94);
        $this->addReference('product-95', $product95);
        $this->addReference('product-96', $product96);
        $this->addReference('product-97', $product97);
        $this->addReference('product-98', $product98);
    }

    public function getOrder()
    {
        return 2;
    }
}
