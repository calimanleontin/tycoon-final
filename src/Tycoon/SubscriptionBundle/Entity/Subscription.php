<?php

namespace Tycoon\SubscriptionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Tycoon\AccessBundle\Entity\User;

/**
 * Class Subscription
 * @package Tycoon\SubscriptionBundle\Entity
 * @ORM\Entity(repositoryClass="Tycoon\SubscriptionBundle\Repository\SubscriptionRepository")
 */
class Subscription
{
    /**
     * @var int $id
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var string $name
     * @ORM\Column(type="text")
     */
    protected $name;

    /**
     * @var \DateTime $startDate
     * @ORM\Column(type="datetime")
     */
    protected $startDate;

    /**
     * @var \DateTime $endDate
     * @ORM\Column(type="datetime")
     */
    protected $endDate;

    /**
     * @var int $endDateTimestamp
     * @ORM\Column(type="integer")
     */
    protected $endDateTimestamp;

    /**
     * @var User $user
     * @ORM\ManyToOne(targetEntity="Tycoon\AccessBundle\Entity\User", inversedBy="subscriptions")
     */
    protected $user;

    /**
     * @var string $notified
     * @ORM\Column(type="string", columnDefinition="enum('not-notified', 'started', 'ended')")
     */
    protected $notified;

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
     * @return \DateTime
     */
    public function getStartDate()
    {
        return $this->startDate;
    }

    /**
     * @param \DateTime $startDate
     */
    public function setStartDate($startDate)
    {
        $this->startDate = $startDate;
    }

    /**
     * @return \DateTime
     */
    public function getEndDate()
    {
        return $this->endDate;
    }

    /**
     * @param \DateTime $endDate
     */
    public function setEndDate($endDate)
    {
        $this->endDate = $endDate;
    }

    /**
     * @return int
     */
    public function getEndDateTimestamp()
    {
        return $this->endDateTimestamp;
    }

    /**
     * @param int $endDateTimestamp
     */
    public function setEndDateTimestamp($endDateTimestamp)
    {
        $this->endDateTimestamp = $endDateTimestamp;
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
        $user->addSubscription($this);
    }

    /**
     * @return string
     */
    public function getNotified()
    {
        return $this->notified;
    }

    /**
     * @param string $notified
     */
    public function setNotified($notified)
    {
        $this->notified = $notified;
    }

    public function __construct()
    {
        $this->notified = 'not-notified';
    }
}
