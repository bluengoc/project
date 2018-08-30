<?php

use Faker\Generator as Faker;

$factory->define(App\Model\ProductVote::class, function (Faker $faker) {
    return [
        //
        'prod_id'=>4,
        'vote_id'=>4
    ];
});
