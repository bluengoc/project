<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductAttribute extends Model
{
    //
    protected $table = 'product_attributes';
    public function product(){
    	return $this->belongsTo('App\Model\Product','prod_id','prod_id');
    }
    public function attribute_values(){
    	return $this->belongsTo('App\Model\AttributeValue','att_value_id','prod_id');
    }
}
