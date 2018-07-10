<?php

namespace Chungpt\Shipping;

class Item
{
    protected $price;
    protected $weight;
    protected $dimensions;

    public function setPrice(int $price)
    {
        $this->price = $price;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setWeight(Weight $weight)
    {
        $this->weight = $weight;
        return $this;
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setDimensions(Dimensions $dimensions)
    {
        $this->dimensions = $dimensions;
        return $this;
    }

    public function getDimensions()
    {
        return $this->dimensions;
    }

}
