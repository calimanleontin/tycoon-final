<?php

namespace Tycoon\CatalogBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use Tycoon\CatalogBundle\Entity\Attribute;
use Tycoon\CatalogBundle\Entity\Fighter;
use Tycoon\CatalogBundle\Entity\Product;

/**
 * Class ProductPriceFixtures
 * @package Tycoon\CatalogBundle\DataFixtures\ORM
 */
class ProductPriceFixtures extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * @param ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $products = array();

        $basicStats = array(
            Attribute::STAT1,
            Attribute::STAT2,
            Attribute::STAT3,
            Attribute::STAT4
        );

        $advancedStats = array(
            Attribute::STAT5,
            Attribute::STAT6,
            Attribute::STAT7,
            Attribute::STAT8
        );

        /** @var int $i */
        for ($i = 1; $i <= 98; $i++) {
            $products[$i] = $manager->merge($this->getReference("product-{$i}"));
            $productPrice = 0;
            $discount = 0;

            /** @var Product $product */
            $product = $products[$i];

            /** @var Attribute $attribute */
            foreach ($product->getAttributes() as $attribute) {
                if (in_array($attribute->getName(), $basicStats)) {
                    $discount += $attribute->getValue() * 0.0004;
                    $productPrice += $attribute->getValue() * 2;
                } elseif (in_array($attribute->getName(), $advancedStats)) {
                    $discount += $attribute->getValue() * 0.0008;
                    $productPrice += $attribute->getValue() * 4;
                } elseif (strcmp($attribute->getName(), Attribute::STAT9) == 0) {
                    $productPrice += $attribute->getValue() * 10;
                } elseif (strcmp($attribute->getName(), Attribute::STAT10) == 0) {
                    $productPrice += $attribute->getValue() * 0.5;
                }
            }

            $productPrice -= $productPrice * $discount;
            $productPrice = floor($productPrice);

            if ($product instanceof Fighter) {
                $productPrice += 500;
            }

            $product->setPrice($productPrice);
        }

        $manager->flush();
    }

    /**
     * @return int
     */
    public function getOrder()
    {
        return 4;
    }
}
