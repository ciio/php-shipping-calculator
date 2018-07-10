<?php

namespace Chungpt\Shipping;

class Calculator
{

    protected $item;

    public function setConfig($config)
    {
        $this->config = $config;

        return $this;
    }

    public function setItem(Item $item)
    {
        $this->item = $item;

        return $this;
    }

    protected function feeByWeight()
    {
        return $this->item->getWeight()->getValue() * $this->config['coefficient']['weight'][$this->item->getWeight()->getUnit()];
    }

    protected function feeByDimensions()
    {
        $totalDimention = $this->item->getDimensions()->getDepth() * $this->item->getDimensions()->getWidth() * $this->item->getDimensions()->getHeight();

        return $totalDimention * $this->config['coefficient']['dimension'][$this->item->getDimensions()->getUnit()];
    }

    protected function getShippingFee()
    {
        return max($this->feeByWeight(), $this->feeByDimensions());
    }

    public function calculate()
    {
        return $this->item->getPrice() + $this->getShippingFee();
    }
}
