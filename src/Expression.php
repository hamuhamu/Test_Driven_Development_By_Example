<?php

namespace App;

interface Expression
{
    public function reduce(Bank $bank, String $to): Money;
}
