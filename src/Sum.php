<?php

namespace App;

class Sum implements Expression
{
    /**
     * 被加算数
     * @val Money
     */
    public $augend;

    /**
     * 加数
     * @val Money
     */
    public $addend;

    public function __construct(Money $augend, Money $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }
}
