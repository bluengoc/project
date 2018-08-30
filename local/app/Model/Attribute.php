<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    //
    protected $table = 'attributes';
     public function attribute_values()
    {
    	return $this->hasMany('App\Model\AttributeValue','att_id','att_id');
    }
}
