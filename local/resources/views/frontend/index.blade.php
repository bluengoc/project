@extends('layouts.master_admin')
@section('title','Thành viên')
@section('content')
<div class="container" style="max-width: 1075px;">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-5">
                        <h2>User <b>Management</b></h2>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th style="width: 252px;">Name</th>                       
                        <th>Email</th>
                        <th style="width: 361px;">Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($post as $post)
                    <tr>
                        <td><a href="#"><img src="https://www.tutorialrepublic.com/examples/images/avatar/4.jpg" class="avatar" alt="Avatar">{{$post->name}}</a></td>
                        <td>{{$post->email}}</td>                        
                        <td><span class="status text-success"></span> Active</td>
                        <td>
                            <a href="#" class="settings" title="Settings" data-toggle="tooltip"><i class="fa fa-edit"></i></a>
                            <a href="#" class="delete" title="Delete" data-toggle="tooltip"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="clearfix">
                <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                <ul class="pagination">
                    <li class="page-item disabled"><a href="#">Previous</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item active"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">4</a></li>
                    <li class="page-item"><a href="#" class="page-link">5</a></li>
                    <li class="page-item"><a href="#" class="page-link">Next</a></li>
                </ul>
            </div>
        </div>
    </div>   
@endsection