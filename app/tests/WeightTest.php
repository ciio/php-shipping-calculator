<?php

namespace Chungpt\Shipping\Tests;

use PHPUnit\Framework\TestCase;
use Chungpt\Shipping\Weight;

class WeightTest extends TestCase
{

    public function testValue()
    {
        $weight = new Weight();

        $this->assertInternalType("int", $weight->setValue(10)->getValue());
    }

    public function testUnit()
    {
        $weight = new Weight();

        $this->assertInternalType("string", $weight->setUnit('kg')->getUnit());
    }
}
