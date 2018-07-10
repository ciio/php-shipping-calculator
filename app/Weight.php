<?php

namespace Chungpt\Shipping;

class Weight
{
    protected $value;
    protected $unit;

    public function setValue(int $value)
    {
        $this->value = $value;
        return $this;
    }

    public function getValue()
    {
        return $this->value;
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
