<?php

use Faker\Generator as Faker;

$factory->define(App\Model\ProductAttribute::class, function (Faker $faker) {
    return [
        //
        'prod_id'=>4,
        'att_value_id'=>42
    ];
});