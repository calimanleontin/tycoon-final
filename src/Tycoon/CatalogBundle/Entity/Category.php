<?php

namespace Tycoon\CatalogBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * @ORM\Entity(repositoryClass="Tycoon\CatalogBundle\Repository\CategoryRepository")
 */
class Category
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    protected $name;

    /**
     * @ORM\Column(type="text")
     */
    protected $description;

    /**
     * @ORM\ManyToMany(targetEntity="Product", mappedBy="categories")
     */
    protected $products;

    // SETTERS AND GETTERS

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return ArrayCollection
     */
    public function getProducts()
    {
        return $this->products;
    }

    /**
     * @param ArrayCollection $products
     */
    public function setProducts($products)
    {
        $this->products = $products;
    }

    /**
     * @param Product $product
     * @return Category $this
     */
    public function addProduct(Product $product)
    {
        $this->products[] = $product;

        return $this;
    }

    /**
     * @param Product $product
     */
    public function removeProduct(Product $product)
    {
        $this->products->removeElement($product);
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->name;
    }

    /**
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        //              =====> VALIDATOR FOR NAME <=====

        $metadata->addPropertyConstraints(
            'name',
            array(
                new Assert\NotBlank(
                    array(
                        'message' => 'You must enter the category name.'
                    )
                ),
                new Assert\Length(
                    array(
                        'min' => 3,
                        'max' => 25,
                        'minMessage' => 'The category name must be at least {{ limit }} characters long.',
                        'maxMessage' => 'The category name cannot be longer than {{ limit }} characters.',
                    )
                ),
                new Assert\Regex(
                    array(
                        'pattern' => '/[^\w\d\s-\']/',
                        'match' => false,
                        'message' => 'The category name must contain only alphanumeric characters, dashes and spaces.',
                    )
                )
            )
        );

        //              =====> VALIDATOR FOR DESCRIPTION <=====

        $metadata->addPropertyConstraints(
            'description',
            array(
                new Assert\NotBlank(
                    array(
                        'message' => 'You must enter the category description.'
                    )
                ),
                new Assert\Length(
                    array(
                        'min' => 10,
                        'max' => 100,
                        'minMessage' => 'The category description must be at least {{ limit }} characters long.',
                        'maxMessage' => 'The category description cannot be longer than {{ limit }} characters.',
                    )
                )
            )
        );
    }

    public function __construct()
    {
        $this->products = new ArrayCollection();
    }
}
