<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;


class UserRegistering
{
    public String $name;
    public String $email;

    public function getUserRegisteringName(): string
    {
        return $this->name;
    }

    public function setUserRegisteringName(string $name): void
    {
        $this->name = $name;
    }

    public function getUserRegisteringEmail(): string
    {
        return $this->email;
    }

    public function setUserRegisteringEmail(string $email): void
    {
        $this->email = $email;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('email', new Assert\Email([
            'message' => 'The email "{{ value }}" is not a valid email.',
        ]));
    }

}
