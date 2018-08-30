<?php

use Faker\Generator as Faker;

$factory->define(App\Model\AttributeValue::class, function (Faker $faker) {
    return [
        //
        'att_id'=>18,
        'att_value'=>$faker->text
    ];
});
