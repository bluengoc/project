<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AttributeValue extends Model
{
    //
    protected $table = 'attribute_values';
    public function product_attributes()
    {
    	return $this->hasMany('App\Model\ProductAttribute','att_value_id','att_value_id');
    }
    public function attributes()
    {
    	return $this->belongsTo('App\Model\Attribute','att_id','att_value_id');
    }
}
