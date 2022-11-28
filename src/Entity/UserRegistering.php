<?php

namespace App\Entity;

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
}

