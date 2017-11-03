<?php

namespace App;

class Money
{
    protected $amount;

    public function equals($object): bool
    {
        // PHPはできない
        // $money = (Money)$object;
        $money = $object;

        return $this->amount === $money->amount;
    }
}
