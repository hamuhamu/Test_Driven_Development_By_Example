<?php

namespace App;

class Franc
{
    private $amount;
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    public function equals($object): bool
    {
        // PHPはできない
        // $dollar = (Franc)$object;
        $dollar = $object;

        return $this->amount === $dollar->amount;
    }
}
