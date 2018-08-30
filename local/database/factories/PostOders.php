<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Orders::class, function (Faker $faker) {
    return [
        //
        'order_name'=>$faker->name,
        'order_phone'=>$faker->phoneNumber,
        'order_email'=>$faker->email,
        'order_address'=>$faker->address,
        'order_status'=>$faker->text,
        'order_note'=>$faker->text
    ];
});
