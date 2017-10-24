<?php

namespace App;

use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{

    public function test()
    {
        $sut = new Calculator();

        $this->assertSame(4, $sut->calc(1, 3));
    }
}
