<?php

namespace Chungpt\Shipping\Tests;

use PHPUnit\Framework\TestCase;
use Chungpt\Shipping\Dimensions;

class DimensionTest extends TestCase
{

    public function testDepth()
    {
        $dimensions = new Dimensions();

        $this->assertInternalType("int", $dimensions->setDepth(10)->getDepth());
    }

    public function testWidth()
    {
        $dimensions = new Dimensions();

        $this->assertInternalType("int", $dimensions->setWidth(10)->getWidth());
    }

    public function testHeight()
    {
        $dimensions = new Dimensions();

        $this->assertInternalType("int", $dimensions->setHeight(10)->getHeight());
    }

    public function testUnit()
    {
        $dimensions = new Dimensions();

        $this->assertInternalType("string", $dimensions->setUnit('m')->getUnit());
    }
}
