<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    //
    protected $table = 'orders';
    public function product_orders(){
    	return $this->hasMany('App\Model\ProductOrder','order_id','order_id');
    }
}
