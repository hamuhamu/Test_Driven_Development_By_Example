<?php

namespace App;

class Dollar
{
    private $amount;
    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals($object): bool
    {
        // PHPはできない
        // $dollar = (Dollar)$object;
        $dollar = $object;

        return $this->amount === $dollar->amount;
    }
}
