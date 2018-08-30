@extends('layouts.master_admin')
@section('title','Sản phẩm')
@section('menu')
<div class="col-lg-9 col-sm-8 col-md-8 col-xs-12">
                        <a href="{{asset('admin/product')}}" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Danh mục</a>
                        <a href="{{asset('admin/product')}}" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Thuộc tính</a>
                        <a href="{{asset('admin/product')}}" class="btn btn-danger pull-right m-l-20 hidden-xs hidden-sm waves-effect waves-light">Danh sách</a>
                        
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
                            <th><span>Tên sản phẩm</span></th>
                            <th><span>Sản phẩm</span></th>
                            <th class="text-center"><span>Mã sản phẩm</span></th>
                            <th><span>Thành tiền</span></th>
                            <th><span>Danh mục</span></th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($products as $product)
                        <tr>
                            <td>{{$product->prod_id}}</td>
                            <td>{{$product->prod_name}}</td>
                            <td>
                                @foreach($product->con as $pt)
                                <a href="admin/product/{{$pt->prod_id}}">
                                    <p>{{$pt->prod_name}}</p>
                                </a><br>
                                @endforeach
                                
                            </td>
                            
                            <td style="text-align:center"><span >{{$product->prod_code}}</span></td>
                            <td class="text-center">
                                <span class="label label-success">{{number_format($product->prod_price)}}đ</span>
                            </td>
                            <td><a href="#">{{$product->prod_name}}</a></td>
                            <td style="width: 110px;">
                            <a href="#" class="add" title="Add" data-toggle="tooltip"><i class="fa fa-plus"></i></a>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash-o"></i></a>
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