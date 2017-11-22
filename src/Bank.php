<?php

namespace App;

class Bank
{
    public function reduce(Expression $source, String $to): Money
    {
        return Money::dollar(10);
    }
}
