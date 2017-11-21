<?php

namespace App;

class Dollar extends Money
{
    public function __construct(int $amount, String $currency)
    {
        parent::__construct($amount, $currency);
    }
}
