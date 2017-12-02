<?php

namespace App;

class Money implements Expression
{
    protected $amount;
    protected $currency;

    public function __construct(int $amount, String $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Expression
    {
        return new Money($this->amount * $multiplier, $this->currency);
    }

    public function plus(Expression $addend): Expression
    {
        return new Sum($this, $addend);
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

    public static function dollar(int $amount): Money
    {
        return new Money($amount, 'USD');
    }

    public static function franc(int $amount): Money
    {
        return new Money($amount, 'CHF');
    }

    public function reduce(Bank $bank, String $to): Money
    {
        $rate = $bank->rate($this->currency, $to);

        return new Money($this->amount / $rate, $to);
    }

    public function currency(): String
    {
        return $this->currency;
    }

    public function amount(): int
    {
        return $this->amount;
    }
}
