<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductImages extends Model
{
    //
    protected $table ='product_images';
    public function products(){
    	return $this->belongsTo('App\Model\Product','prod_id','prod_id');
    }
    public function images(){
    	return $this->belongsTo('App\Model\Images','img_id','prod_id');
    }
}
