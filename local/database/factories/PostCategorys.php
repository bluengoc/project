<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Categorys::class, function (Faker $faker) {
    return [
        //
        'cate_name'=>$faker->name,
        'cate_thumbnail'=>1,
        'cate_slug'=>$faker->slug,
        'cate_parent'=>1,
    ];
});
