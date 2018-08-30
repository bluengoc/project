<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $table = 'products';
    public function con()
    {
        return $this->hasMany($this,'prod_parent','prod_id');
    }
    public function product_images()
    {
    	return $this->hasMany('App\Model\ProductImages','prod_id','prod_id');
    }
    public function product_votes()
    {
    	return $this->hasMany('App\Model\ProductVote','prod_id','prod_id');
    }
    public function product_attributes()
    {
    	return $this->hasMany('App\Model\ProductAttribute','prod_id','prod_id');
    }
    public function product_comments()
    {
    	return $this->hasMany('App\Model\ProductComment','prod_id','prod_id');
    }
    public function product_orders()
    {
    	return $this->hasMany('App\Model\ProductOrder','prod_id','prod_id');
    }
    public function categorys()
    {
        return $this->belongsTo('App\Model\Categorys','cate','prod_id');
    }
}
