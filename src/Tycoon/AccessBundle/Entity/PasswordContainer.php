<?php

namespace Tycoon\AccessBundle\Entity;

use Symfony\Component\Security\Core\Validator\Constraints as SecurityAssert;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

/**
 * Class PasswordContainer
 * @package Tycoon\AccessBundle\Entity
 */
class PasswordContainer
{
    /** @var string $oldPassword */
    protected $oldPassword;

    /** @var string $newPassword */
    protected $newPassword;

    /**
     * @return string
     */
    public function getOldPassword()
    {
        return $this->oldPassword;
    }

    /**
     * @param string $oldPassword
     */
    public function setOldPassword($oldPassword)
    {
        $this->oldPassword = $oldPassword;
    }

    /**
     * @return string
     */
    public function getNewPassword()
    {
        return $this->newPassword;
    }

    /**
     * @param string $newPassword
     */
    public function setNewPassword($newPassword)
    {
        $this->newPassword = $newPassword;
    }

    /**
     * @param ClassMetadata $metadata
     */
    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraints(
            'newPassword',
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
}
