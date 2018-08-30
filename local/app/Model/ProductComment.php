<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductComment extends Model
{
    //
    protected $table = 'product_comments';
    public function products(){
    	return $this->belongsTo('App\Model\Product','prod_id','prod_id');
    }
    public function comments(){
    	return $this->belongsTo('App\model\Comment','comment_id','prod_id');
    }
}
