<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductOrder extends Model
{
    //
    protected $table = 'product_orders';
    public function product(){
    	return $this->belongsTo('App\Model\Product','prod_id','prod_id');
    }
    public function orders(){
    	return $this->belongsTo('App\Model\Order','order_id','prod_id');
    }
}
