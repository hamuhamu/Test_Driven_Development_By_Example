<?php

namespace App;

class Dollar extends Money
{
    public function __construct(int $amount, String $currency)
    {
        parent::__construct($amount, $currency);
    }

    public function times(int $multiplier): Money
    {
        return new Dollar($this->amount * $multiplier, $this->currency);
    }
}
