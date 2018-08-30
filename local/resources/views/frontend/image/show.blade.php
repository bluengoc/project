@extends('layouts.master_admin')
@section('title','Sản phẩm')
@section('menu')
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="{{asset('admin/upload')}}" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Ảnh</a>
                        <a href="{{asset('admin/product')}}" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Slide</a>
                        
                        
                    </div>
@endsection
@section('content')
<div class="white-box">
                           <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container" style="max-width: 1018px">
<div class="row">
    <div class="col-lg-12">
        <div class="main-box clearfix">
            <div class="table-responsive">
                <table class="table user-list">
                    <thead>
                        <tr>
                            <th><span>ID</span></th>
                            <th><span>Ảnh</span></th>
                            <th class="text-center"><span>Ngày</span></th>
                            <th><span>Đuôi</span></th>
                            <th><span>Mã </span></th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                {{$img->img_id}}
                            </td>
                            <td>
                                <img src="images/product/{{$img->img_name}}" alt="">
                            </td>
                            <td class="text-center">
                                <span>{{$img->created_at}}</span>
                            </td>
                            <td>
                                <a href="#">{{$img->img_type}}</a>
                            </td>
                            <td>
                                <a href="#">{{$img->img_name}}</a>
                            </td>
                            <td style="width: 110px;">
                        
                            <a href="admin/image/{{$img->img_id}}" class="settings" title="Settings" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

{!!Form::open(['action'=>['Admin\ImageController@update',$img->img_id],'method'=>'POST'])!!}

<!-- 
<form action="{{asset('upload')}}" method="POST">
    {{ csrf_field() }} -->
    {{Form::file('name')}}
    <br>Đuôi
    <select name="type" id="">
        <option selected="" value="jpg">jpg</option>
        <option value="png">png</option>
        <option value="gif">gif</option>
    </select>  
    <br>  
    <br>
<!--     <input type="submit" value="Tải lên"> -->
<!-- </form> -->

{{Form::submit('Tải lên',['class'=>'btn btn-primary'])}}
{{Form::hidden('_method','PUT')}}
{!!Form::close()!!}
        </div>
    </div>
</div>
</div>
</div>
@endsection