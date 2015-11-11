<?php

namespace Tycoon\AccessBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Tycoon\OrderBundle\Entity\Order;
use Tycoon\SubscriptionBundle\Entity\Subscription;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="Tycoon\AccessBundle\Repository\UserRepository")
 * @ORM\Table(
 *      uniqueConstraints={
 *          @ORM\UniqueConstraint(name="name", columns={"name"}),
 *          @ORM\UniqueConstraint(name="email", columns={"email"})
 *      }
 * )
 */
class User implements UserInterface
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @var int $id
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     * @var string $name
     */
    protected $name;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string $firstName
     */
    protected $firstName;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string $lastName
     */
    protected $lastName;

    /**
     * @ORM\Column(type="string")
     * @var string $password
     */
    protected $password;

    /**
     * @ORM\Column(type="string")
     * @var string $email
     */
    protected $email;

    /**
     * @ORM\Column(type="boolean")
     * @var bool $adminFlag
     */
    protected $adminFlag;

    /**
     * @ORM\Column (type="string")
     * @var string $cartItems
     */
    protected $cartItems;

    /**
     * @ORM\Column(type="datetime")
     * @var \DateTime $created
     */
    protected $created;

    /**
     * @ORM\OneToMany(targetEntity="Tycoon\OrderBundle\Entity\Order", mappedBy="user")
     * @var Order $orders
     */
    protected $orders;

    /**
     * @ORM\OneToMany(targetEntity="Tycoon\SubscriptionBundle\Entity\Subscription", mappedBy="user")
     * @var Subscription $subscriptions
     */
    protected $subscriptions;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string $gameSession
     */
    protected $gameSession;

    /**
     * @ORM\Column(type="string", nullable=true)
     * @var string $userMessage
     */
    protected $userMessage;

    /**
     * @return string
     */
    public function getUserMessage()
    {
        return $this->userMessage;
    }

    /**
     * @param string $userMessage
     */
    public function setUserMessage($userMessage)
    {
        $this->userMessage = $userMessage;
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
    public function getCartItems()
    {
        return $this->cartItems;
    }

    /**
     * @param string $cartItems
     */
    public function setCartItems($cartItems)
    {
        $this->cartItems = $cartItems;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param string $firstName
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param string $lastName
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function getAdminFlag()
    {
        return $this->adminFlag;
    }

    /**
     * @param bool $adminFlag
     */
    public function setAdminFlag($adminFlag)
    {
        $this->adminFlag = $adminFlag;
    }

    /**
     * @return \DateTime
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param \DateTime $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return Order
     */
    public function getOrders()
    {
        return $this->orders;
    }

    /**
     * @param Order $orders
     */
    public function setOrders($orders)
    {
        $this->orders = $orders;
    }

    /**
     * @param Order $order
     */
    public function addOrder($order)
    {
        $this->orders[] = $order;
    }

    /**
     * @return Subscription
     */
    public function getSubscriptions()
    {
        return $this->subscriptions;
    }

    /**
     * @param Subscription $subscriptions
     */
    public function setSubscriptions($subscriptions)
    {
        $this->subscriptions = $subscriptions;
    }

    /**
     * @param Subscription $subscription
     */
    public function addSubscription($subscription)
    {
        $this->subscriptions[] = $subscription;
    }

    /**
     * @return string
     */
    public function getGameSession()
    {
        return $this->gameSession;
    }

    /**
     * @param string $gameSession
     */
    public function setGameSession($gameSession)
    {
        $this->gameSession = $gameSession;
    }

    /**
     * @return string
     */
    public function getUsername()
    {
        return $this->name;
    }

    // User interface methods

    /**
     * @return null
     */
    public function getSalt()
    {
        return null;
    }

    /**
     * @return null
     */
    public function eraseCredentials()
    {
        return null;
    }

    /**
     * @return null
     */
    public function getRoles()
    {
        return null;
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
                        'message' => 'You must enter your name.'
                    )
                ),
                new Assert\Length(
                    array(
                        'min' => 4,
                        'max' => 14,
                        'minMessage' => 'Your username must be at least {{ limit }} characters long.',
                        'maxMessage' => 'Your username cannot be longer than {{ limit }} characters.',
                    )
                ),
                new Assert\Regex(
                    array(
                        'pattern' => '/[^\w\d\s.]/',
                        'match' => false,
                        'message' => 'The username must contain only alphanumeric characters.',
                    )
                )
            )
        );

        //              =====> VALIDATOR FOR FIRSTNAME <=====

        $metadata->addPropertyConstraints(
            'firstName',
            array(
                new Assert\Length(
                    array(
                        'min' => 3,
                        'max' => 15,
                        'minMessage' => 'Your firstname must be at least {{ limit }} characters long.',
                        'maxMessage' => 'Your firstname cannot be longer than {{ limit }} characters.',
                    )
                ),
                new Assert\Regex(
                    array(
                        'pattern' => '/[^\w\d-`\']/',
                        'match' => false,
                        'message' => 'The firstname must contain only alphanumeric characters and dashes.',
                    )
                )
            )
        );

        //              =====> VALIDATOR FOR LASTNAME <=====

        $metadata->addPropertyConstraints(
            'lastName',
            array(
                new Assert\Length(
                    array(
                        'min' => 3,
                        'max' => 15,
                        'minMessage' => 'Your lastname must be at least {{ limit }} characters long.',
                        'maxMessage' => 'Your lastname cannot be longer than {{ limit }} characters.',
                    )
                ),
                new Assert\Regex(
                    array(
                        'pattern' => '/[^\w\d-`\']/',
                        'match' => false,
                        'message' => 'The lastname must contain only alphanumeric characters and dashes.',
                    )
                )
            )
        );

        //              =====> VALIDATOR FOR PASSWORD <=====

        $metadata->addPropertyConstraints(
            'password',
            array(
                new Assert\NotBlank(
                    array(
                        'message' => 'Password field can\'t be blank.'
                    )
                ),
                new Assert\Length(
                    array(
                        'min' => 4,
                        'max' => 60,
                        'minMessage' => 'Your password must be at least {{ limit }} characters long.',
                        'maxMessage' => 'Your password cannot be longer than {{ limit }} characters.',
                    )
                ),
                new Assert\Regex(
                    array(
                        'pattern' => '/[\s]/',
                        'match' => false,
                        'message' => 'The password cannot contain spaces.',
                    )
                )
            )
        );
    }

    public function __construct()
    {
        $this->setCreated(new \DateTime());
        $this->setAdminFlag(0);
        $this->orders = new ArrayCollection();
        $this->cartItems = 0;
    }
}
