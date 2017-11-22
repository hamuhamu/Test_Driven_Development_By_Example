<?php

namespace App;

class Bank
{
    public function reduce(Expression $source, String $to): Money
    {
        if ($source instanceof Money) {
            return $source;
        }

        // PHPはできない
        // $sum = (Sum)$source;
        $sum = $source;

        return $sum->reduce($to);
    }
}
