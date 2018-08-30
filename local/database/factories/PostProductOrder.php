<?php

use Faker\Generator as Faker;

$factory->define(App\Model\ProductOrder::class, function (Faker $faker) {
    return [
        //
        'prod_id'=>4,
        'qty'=>4,
        'price'=>200000,
        'options'=>$faker->text
    ];
});
