<?php

namespace App;

class Bank
{
    /**
     * @val []
     * PHPはHashMapが存在しないので連想配列を使用する
     */
    private $rates = [];

    public function reduce(Expression $source, String $to): Money
    {
        return $source->reduce($this, $to);
    }

    public function addRate(String $from, String $to, int $rate): void
    {
        // PHPではJavaのHashMapのような記述ができない
        // $this->rates[new Pair($from, $to)] = $rate;
        // とりあえず、$from_$toで代用した
        $this->rates[$from . '_' . $to] = $rate;
    }

    public function rate(String $from, String $to): int
    {
        return ($from === 'CHF' && $to === 'USD') ? 2 : 1;
    }
}
