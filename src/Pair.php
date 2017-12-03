<?php

namespace App;

class Pair
{
    private $from;
    private $to;

    public function __construct(String $from, String $to)
    {
        $this->from = $from;
        $this->to = $to;
    }
}
