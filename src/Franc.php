<?php

namespace App;

class Franc extends Money
{
    public function __construct(int $amount, String $currency)
    {
        parent::__construct($amount, $currency);
    }
}
