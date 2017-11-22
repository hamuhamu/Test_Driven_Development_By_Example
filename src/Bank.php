<?php

namespace App;

class Bank
{
    public function reduce(Expression $source, String $to): Money
    {
        // PHPはできない
        // $sum = (Sum)$source;
        $sum = $source;

        return $sum->reduce($to);
    }
}
