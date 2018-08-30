<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Attribute::class, function (Faker $faker) {
    return [
        //
        'att_name'=>$faker->name,
        'att_slug'=>$faker->slug
    ];
});
