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
                        @foreach($image as $pt)
                        <tr>
                            <td>
                                {{$pt->img_id}}
                            </td>
                            <td>
                                <img src="images/product/{{$pt->img_name}}" alt="">
                            </td>
                            <td class="text-center">
                                <span>{{$pt->created_at}}</span>
                            </td>
                            <td>
                                <a href="#">{{$pt->img_type}}</a>
                            </td>
                            <td>
                                <a href="#">{{$pt->img_name}}</a>
                            </td>
                            <td style="width: 125px;">
                        
                            <a href="admin/image/{{$pt->img_id}}" class="table_link" ><i class="fa fa-edit"></i></a>
    {{Form::open(['action'=>['Admin\ImageController@destroy',$pt->img_id],'method'=>'POST'])}}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('Delete',['class'=>'btn btn-danger'])}}
{{Form::close()}}
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection