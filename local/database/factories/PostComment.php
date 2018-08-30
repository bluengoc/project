<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Comments::class, function (Faker $faker) {
    return [
        //
        'comment_name'=>$faker->name,
        'comment_content'=>$faker->text,
    ];
});
