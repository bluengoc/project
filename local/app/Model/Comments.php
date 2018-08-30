<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    //
    protected $table = 'comments';
    public function product_comments(){
    	return $this->hasMany('App\Model\ProductComment','comment_id','comment_id');
    }
}
