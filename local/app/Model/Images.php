<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    //
    protected $table = 'images';
    protected $primaryKey = 'img_id';
    public function product_images(){
    	return $this->hasMany('App\Model\ProductImage','img_id','img_id');
    }
}
