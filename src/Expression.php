<?php

namespace App;

interface Expression
{
    public function plus(Expression $addend): Expression;

    public function reduce(Bank $bank, String $to): Money;
}
