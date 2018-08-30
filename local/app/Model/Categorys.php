<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Categorys extends Model
{
    //
    protected $table = 'categorys';
    public function products(){
    	return $this->hasMany('App\Model\Product','cate','cate_id');
    }
}
