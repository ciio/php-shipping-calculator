<?php

namespace Chungpt\Shipping;

require './vendor/autoload.php';

$config = include __DIR__ . '/config.php';

$weight = new Weight();
$weight->setValue(10);
$weight->setUnit('kg');

$dimensions = new Dimensions();
$dimensions->getDepth(10);
$dimensions->setWidth(10);
$dimensions->setHeight(10);
$dimensions->setUnit('cm');

$item = new Item();
$item->setPrice(100);
$item->setWeight($weight);
$item->setDimensions($dimensions);

$calculator = new Calculator();
$calculator->setConfig($config)->setItem($item);

var_dump($calculator->calculate());
