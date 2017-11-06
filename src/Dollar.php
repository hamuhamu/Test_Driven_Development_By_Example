<?php

namespace App;

class Dollar extends Money
{
    public function __construct(int $amount, String $currency)
    {
        $this->amount = $amount;
        $this->currency = $currency;
    }

    public function times(int $multiplier): Money
    {
        return Money::dollar($this->amount * $multiplier);
    }
}
