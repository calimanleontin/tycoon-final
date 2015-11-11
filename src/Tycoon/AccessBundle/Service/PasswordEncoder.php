<?php

namespace Tycoon\AccessBundle\Service;

use Hautelook\Phpass\PasswordHash;
use Symfony\Component\Security\Core\Encoder\PasswordEncoderInterface;

/**
 * Class PasswordEncoder
 * @package Tycoon\AccessBundle\Service
 */
class PasswordEncoder extends PasswordHash implements PasswordEncoderInterface
{
    /**
     * @param int $iteration_count_log2
     * @param bool $portable_hashes
     */
    public function __construct($iteration_count_log2 = 8, $portable_hashes = false)
    {
        parent::__construct($iteration_count_log2, $portable_hashes);
    }

    /**
     * @param string $encoded
     * @param string $raw
     * @param string $salt
     * @return bool
     */
    public function isPasswordValid($encoded, $raw, $salt)
    {
        return $this->CheckPassword($raw, $encoded);
    }

    /**
     * @param string $r -aw
     * @param string $salt
     * @return string
     */
    public function encodePassword($raw, $salt)
    {
        return $this->HashPassword($raw);
    }
}
