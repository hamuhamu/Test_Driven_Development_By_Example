<?php

namespace App;

class Money
{
    protected $amount;

    public function equals($object): bool
    {
        // PHPはできない
        // $money = (Money)$object;
        $money = $object;

        return $this->amount === $money->amount && get_called_class() === get_class($money);
    }
}
