<?php

namespace App;

use PHPUnit\Framework\TestCase;

class MoneyTest extends TestCase
{

    /**
     * @test
     */
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $five->times(2);

        $this->assertSame(10, $five->amount);
    }
}
