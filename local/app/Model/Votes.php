<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Votes extends Model
{
    //
    protected $table = 'votes';
    public function product_votes(){
    	return $this->hasMany('App\Model\ProductVote','vote_id','vote_id');
    }
}
