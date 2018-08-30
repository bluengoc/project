<?php

use Faker\Generator as Faker;

$factory->define(App\Model\ProductImages::class, function (Faker $faker) {
    return [
        //
        'prod_id'=>4,
        'img_id'=>4
    ];
});
