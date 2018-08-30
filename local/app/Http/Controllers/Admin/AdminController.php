<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Model\Product;
use App\Model\Images;
use App\Http\Controllers\Controller;
class AdminController extends Controller
{
    //
      public function getProduct()
    {
        $products = Product::all();
        
        return view('frontend.product.product',compact('products'));
    }
    public function  getComment()
    {
        $products = Product::all();
        
        //return view('frontend.product',compact('products'));
    }
   
    public function  getImage()
    {
        $image = Images::all();
        return view('frontend.image.image',compact('image'));
    }
    public function  getUpload()
    {
        return view('frontend.upload');
    }
    public function  postUpload(Request $request)
    {
        $upload = new Images();
        $upload->img_name = $request->input('name');
        $upload->img_type = $request->input('type');
        $upload->save();
        return redirect('upload');
    }
    
}
