<?php

namespace App;

class Franc extends Money
{
    public function __construct(int $amount, String $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Money
    {
        return Money::Franc($this->amount * $multiplier);
    }
}
