<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Images::class, function (Faker $faker) {
    return [
        //
        'img_name'=>$faker->name,
        'img_type'=>$faker->text
    ];
});
