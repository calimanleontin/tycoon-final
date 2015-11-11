<?php

namespace Tycoon\SubscriptionBundle\Entity;

use Symfony\Component\Validator\Constraints\DateTime;

/**
 * Class Notification
 * @package Tycoon\SubscriptionBundle\Entity
 */
class Notification
{
    /** @var  int $userId */
    protected $userId;

    /** @var  string $subscriptionName */
    protected $subscriptionName;

    /** @var  DateTime $endDate */
    protected $endDate;

    /** @var string $status */
    protected $status;

    /**
     * @return int
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * @param int $userId
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;
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
     * @return string
     */
    public function getSubscriptionName()
    {
        return $this->subscriptionName;
    }

    /**
     * @param string $subscriptionName
     */
    public function setSubscriptionName($subscriptionName)
    {
        $this->subscriptionName = $subscriptionName;
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

    public function getVars()
    {
        return get_object_vars($this);
    }
}
