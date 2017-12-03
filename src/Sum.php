<?php

namespace App;

class Sum implements Expression
{
    /**
     * 被加算数
     * @val Expression
     */
    public $augend;

    /**
     * 加数
     * @val Expression
     */
    public $addend;

    public function __construct(Expression $augend, Expression $addend)
    {
        $this->augend = $augend;
        $this->addend = $addend;
    }

    public function plus(Expression $addend): Expression
    {
        return new Sum($this, $addend);
    }

    public function reduce(Bank $bank, String $to): Money
    {
        $amount = $this->augend->reduce($bank, $to)->amount() + $this->addend->reduce($bank, $to)->amount();

        return new Money($amount, $to);
    }
}
