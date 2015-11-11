<?php

namespace Tycoon\OrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Tycoon\CatalogBundle\Entity\Product;

/**
 * @ORM\Entity(repositoryClass="Tycoon\OrderBundle\Repository\ItemRepository")
 */
class Item
{
    /**
     * @var int $id
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var Product $product
     * @ORM\ManyToOne(targetEntity="Tycoon\CatalogBundle\Entity\Product", inversedBy="item")
     */
    protected $product;

    /**
     * @var int $productPrice
     * @ORM\Column(type="integer")
     */
    protected $productPrice;

    /**
     * @var int $quantity
     * @ORM\Column(type="integer")
     */
    protected $quantity;

    /**
     * @var Order $order
     * @ORM\ManyToOne(targetEntity="Order", inversedBy="items")
     */
    protected $order;

    /**
     * @return Product
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param Product $product
     */
    public function setProduct($product)
    {
        $this->product = $product;
    }

    /**
     * @return int
     */
    public function getQuantity()
    {
        return $this->quantity;
    }

    /**
     * @param int $quantity
     */
    public function setQuantity($quantity)
    {
        $this->quantity = $quantity;
    }

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
     * @return int
     */
    public function getProductPrice()
    {
        return $this->productPrice;
    }

    /**
     * @param int $productPrice
     */
    public function setProductPrice($productPrice)
    {
        $this->productPrice = $productPrice;
    }

    /**
     * @return Order
     */
    public function getOrder()
    {
        return $this->order;
    }

    /**
     * @param Order $order
     */
    public function setOrder($order)
    {
        $this->order = $order;
    }

    public function increaseQuantity()
    {
        $this->quantity++;
    }

    public function decreaseQuantity()
    {
        $this->quantity--;
    }

    /**
     * @param Product $product
     */
    public function __construct(Product $product)
    {
        $this->product = $product;
        $this->quantity = 1;
    }
}
