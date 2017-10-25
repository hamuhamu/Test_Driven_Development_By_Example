<?php

namespace App;

use PHPUnit\Framework\TestCase;
use App\Dollar;

class MoneyTest extends TestCase
{
    /**
     * @test
     */
    public function testMultiplication()
    {
        $five = new Dollar(5);
        $product = $five->times(2);

        $this->assertSame(10, $product->amount);

        $product = $five->times(3);
        $this->assertSame(15, $product->amount);
    }
}
