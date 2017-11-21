<?php

namespace App;

class Money
{
    protected $amount;
    protected $currency;

    public function __construct(int $amount, String $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Money
    {
        return null;
    }

    public function equals($object): bool
    {
        // PHPはできない
        // $money = (Money)$object;
        $money = $object;

        return $this->amount === $money->amount && $this->currency() === $money->currency();
    }

    public function __toString()
    {
        return $this->amount . ' ' . $this->currency;
    }

    public static function dollar(int $amount): Dollar
    {
        return new Dollar($amount, 'USD');
    }

    public static function franc(int $amount): Franc
    {
        return new Franc($amount, 'CHF');
    }

    public function currency(): String
    {
        return $this->currency;
    }
}
