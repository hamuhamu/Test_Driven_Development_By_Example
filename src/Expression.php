<?php

namespace App;

interface Expression
{
    public function reduce(String $to): Money;
}
