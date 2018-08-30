@extends('layouts.master_admin')
@section('title','Upload ảnh')
@section('content')

{!!Form::open(['action'=>'Admin\ImageController@store','method'=>'POST'])!!}

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
{!!Form::close()!!}
@endsection