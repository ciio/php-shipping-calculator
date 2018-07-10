<?php

define('BASE_WEIGHT_COST', 11);
define('BASE_DIMENSION_COST', 11);

return [
    'coefficient' => [
        'weight' => [
            'kg' => BASE_WEIGHT_COST,
            'ton' => BASE_WEIGHT_COST * 1000,
        ],
        'dimension' => [
            'm' => BASE_DIMENSION_COST,
            'cm' => BASE_DIMENSION_COST / 100,
        ],
    ],
];
