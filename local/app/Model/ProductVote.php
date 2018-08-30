<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ProductVote extends Model
{
    //
    protected $table = 'product_votes';
    public function product(){
    	return $this->belongsTo('App\Model\Product','prod_id','prod_id');
    }
    public function votes(){
    	return $this->belongsTo('App\Model\Vote','vote_id','prod_id');
    }
}
