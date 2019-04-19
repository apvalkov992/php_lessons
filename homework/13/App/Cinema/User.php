<?php

namespace App\Cinema;

class User
{
    private $age;

    private $cash;

    public function __construct(int $age, float $cash)
    {
        $this->age = $age;
        $this->cash = $cash;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function getCash() {
        return $this->cash;
    }
}