<?php

use Faker\Generator as Faker;

$factory->define(App\Model\ProductComment::class, function (Faker $faker) {
    return [
        //
        'prod_id'=>4,
        'comment_id'=>4
    ];
});
