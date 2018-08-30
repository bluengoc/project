<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Votes::class, function (Faker $faker) {
    return [
        //
        'vote_rate'=>1
    ];
});
