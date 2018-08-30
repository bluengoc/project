<?php

use Faker\Generator as Faker;

$factory->define(App\Model\Product::class, function (Faker $faker) {
    return [
        //
        'prod_name'=>'Giày xăng đan-đỏ',
        'prod_code'=>'M02',
        'prod_des'=>'Sản phẩm chất lượng tốt',
        'prod_price'=>200000,
        'prod_regular_price'=>150000,
        'prod_sale_price'=>50000,
        'prod_thumbnail'=>1,
        'cate'=>23,
        'prod_type'=>'con',
        'prod_status'=>'Còn hàng',
        'prod_parent'=>10,
    ];
});
