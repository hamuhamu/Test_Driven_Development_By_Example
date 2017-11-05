<?php

namespace App;

abstract class Money
{
    protected $amount;

    abstract public function times(int $amount): Money;

    public function equals($object): bool
    {
        // PHPはできない
        // $money = (Money)$object;
        $money = $object;

        return $this->amount === $money->amount && get_called_class() === get_class($money);
    }

    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount);
    }

    public static function franc(int $amount): Franc
    {
        return new Franc($amount);
    }
}
