<?php

namespace Tycoon\OrderBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Tycoon\AccessBundle\Entity\User;

/**
 * @ORM\Entity(repositoryClass="Tycoon\OrderBundle\Repository\OrderRepository")
 * @ORM\Table(name="order_history")
 */
class Order
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var array $items
     * @ORM\OneToMany(targetEntity="Item", mappedBy="order")
     */
    protected $items;

    /**
     * @ORM\Column(type="datetime")
     */
    protected $date;

    /**
     * @var User $user
     * @ORM\ManyToOne(targetEntity="Tycoon\AccessBundle\Entity\User", inversedBy="orders")
     */
    protected $user;

    /**
     * @var string $status
     * @ORM\Column(type="string")
     */
    protected $status;

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
     * @return array
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param array $items
     */
    public function setItems($items)
    {
        $this->items = $items;
    }

    /**
     * @param Item $item
     * @return bool
     */
    public function addItem($item)
    {
        /** @var Item $currentItem */
        foreach ($this->items as $currentItem) {
            if ($item->getProduct()->getId() == $currentItem->getProduct()->getId()) {
                $currentItem->increaseQuantity();

                // if quantity > stock, we rollback the previous increase
                if ($currentItem->getQuantity() > $currentItem->getProduct()->getStock()) {
                    $currentItem->decreaseQuantity();

                    return false;
                }

                return true;
            }
        }

        // if stock <= 0, object is not added to cart
        if ($item->getProduct()->getStock() > 0) {
            $item->setOrder($this);
            $this->items[] = $item;

            return true;
        }

        return false;
    }

    /**
     * @param Item $item
     */
    public function removeItem($item)
    {
        /**
         * @var mixed $key
         * @var Item $initialItem
         */
        foreach ($this->items as $key => $initialItem) {
            if ($initialItem->getProduct()->getId() == $item->getProduct()->getId()) {
                unset($this->items[$key]);

                break;
            }
        }
    }

    /**
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param \DateTime $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }

    /**
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param User $user
     */
    public function setUser($user)
    {
        $this->user = $user;
        $user->addOrder($this);
    }

    /**
     * @return string
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param string $status
     */
    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function __construct()
    {
        $this->items = array();
    }
}
