<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Images;
class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $image = Images::all();
       return view('frontend.image.index',compact('image'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/image');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $image = new Images;
        $image->img_name = $request->input('name');
        $image->img_type = $request->input('type');
        $image->save();
        return redirect('admin/image')->with('success','Thêm thành công');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $img = Images::find($id);
        // return view('frontend.image.show',compact('img'));
        return view('frontend.image.show',compact('img'));
    
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $image = Images::find($id);
        // $image->img_name = $request->input('name');
        // $image->img_type = $request->input('type');
        // $image->save();
        // return redirect('admin/image')->with('success','Thêm thành công');
        //return 'abc';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $image = Images::find($id);
        $image->img_name = $request->input('name');
        $image->img_type = $request->input('type');
        $image->save();
        return redirect('admin/image')->with('edit','Sửa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $dele =  Images::find($id);
       $dele->delete();
       return redirect('admin/image')->with('delete','Xóa thành công');
    }
}
