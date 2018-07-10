<?php
namespace Chungpt\Shipping;

class Dimensions
{
    protected $depth;
    protected $width;
    protected $height;
    protected $unit;

    public function setDepth(int $value)
    {
        $this->depth = $value;
        return $this;
    }

    public function getDepth()
    {
        return $this->depth;
    }

    public function setWidth(int $value)
    {
        $this->width = $value;
        return $this;
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setHeight(int $value)
    {
        $this->height = $value;
        return $this;
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setUnit(string $unit)
    {
        $this->unit = $unit;
        return $this;
    }

    public function getUnit()
    {
        return $this->unit;
    }
}
