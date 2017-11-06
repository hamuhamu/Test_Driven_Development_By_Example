<?php

namespace App;

class Dollar extends Money
{
    public function __construct(int $amount)
    {
        $this->amount = $amount;
        $this->currency = 'USD';
    }

    public function times(int $multiplier): Money
    {
        return new Dollar($this->amount * $multiplier);
    }
}
