<?php

namespace Tycoon\OrderBundle\Entity;

/**
 * Class GameItem
 * @package Tycoon\OrderBundle\Entity
 */
class GameItem
{
    /** @var int $name */
    protected $name;

    /** @var string $type */
    protected $type;

    /** @var int $stamina */
    protected $stamina = 0;

    /** @var int $strength */
    protected $strength = 0;

    /** @var int $agility */
    protected $agility = 0;

    /** @var int $striking */
    protected $striking = 0;

    /** @var int $intelligence */
    protected $intelligence = 0;

    /** @var int $grappling */
    protected $grappling = 0;

    /** @var  int $takedown */
    protected $takedown = 0;

    /** @var  int $kicking */
    protected $kicking = 0;

    /** @var  int $duration */
    protected $duration = 0;

    /** @var int qunatity */
    protected $quantity = 0;

    /** @var  string $image_url */
    protected $image_url;

    /**
     * @return int
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param int $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getImageUrl()
    {
        return $this->image_url;
    }

    /**
     * @param string $image_url
     */
    public function setImageUrl($image_url)
    {
        $this->image_url = $image_url;
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
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param string $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return int
     */
    public function getStamina()
    {
        return $this->stamina;
    }

    /**
     * @param int $stamina
     */
    public function setStamina($stamina)
    {
        $this->stamina = $stamina;
    }

    /**
     * @return int
     */
    public function getStrength()
    {
        return $this->strength;
    }

    /**
     * @param int $strength
     */
    public function setStrength($strength)
    {
        $this->strength = $strength;
    }

    /**
     * @return int
     */
    public function getAgility()
    {
        return $this->agility;
    }

    /**
     * @param int $agility
     */
    public function setAgility($agility)
    {
        $this->agility = $agility;
    }

    /**
     * @return int
     */
    public function getStriking()
    {
        return $this->striking;
    }

    /**
     * @param int $striking
     */
    public function setStriking($striking)
    {
        $this->striking = $striking;
    }

    /**
     * @return int
     */
    public function getIntelligence()
    {
        return $this->intelligence;
    }

    /**
     * @param int $intelligence
     */
    public function setIntelligence($intelligence)
    {
        $this->intelligence = $intelligence;
    }

    /**
     * @return int
     */
    public function getGrappling()
    {
        return $this->grappling;
    }

    /**
     * @param int $grappling
     */
    public function setGrappling($grappling)
    {
        $this->grappling = $grappling;
    }

    /**
     * @return int
     */
    public function getTakedown()
    {
        return $this->takedown;
    }

    /**
     * @param int $takedown
     */
    public function setTakedown($takedown)
    {
        $this->takedown = $takedown;
    }

    /**
     * @return int
     */
    public function getKicking()
    {
        return $this->kicking;
    }

    /**
     * @param int $kicking
     */
    public function setKicking($kicking)
    {
        $this->kicking = $kicking;
    }

    /**
     * @return int
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * @param int $duration
     */
    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    /**
     * @param string $stat
     * @param int $value
     */
    public function setStat($stat, $value)
    {
        switch ($stat) {
            case "stamina":
                $this->stamina = $value;

                break;
            case "strength":
                $this->strength = $value;

                break;
            case "agility":
                $this->agility = $value;

                break;
            case "striking":
                $this->striking = $value;

                break;
            case "intelligence":
                $this->intelligence = $value;

                break;
            case "grappling":
                $this->grappling = $value;

                break;
            case "takedown":
                $this->takedown = $value;

                break;
            case "kicking":
                $this->kicking = $value;

                break;
        }
    }

    /**
     * @return array
     */
    public function getVars()
    {
        return get_object_vars($this);
    }
}
