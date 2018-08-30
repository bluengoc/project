
@extends('layouts.master')
@section('title','Register')
@section('content')
<div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/img-01.png" alt="IMG">
                </div>

                <form class="login100-form validate-form" action="{{route('register')}}" method="POST">
                    {{csrf_field()}}
                    <span class="login100-form-title">
                        Register
                    </span>

                    <div class="wrap-input100 validate-input" data-validate = "Tên không được bỏ trống">
                        <input class="input100" type="text" name="name" placeholder="Nhập ho tên...">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-address-book" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate = "Email không hợp lệ">
                        <input class="input100" type="text" name="email" placeholder="Email">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </div>


                    <div class="wrap-input100 validate-input" data-validate = "Password is required">
                        <input class="input100" type="password" name="password" placeholder="Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>
                    
                    <div class="wrap-input100 validate-input" data-validate = "">
                        <input class="input100" type="password" name="password_confirmation" placeholder="Confirm Password">
                        <span class="focus-input100"></span>
                        <span class="symbol-input100">
                            <i class="fa fa-lock" aria-hidden="true"></i>
                        </span>
                    </div>

                    <div class="container-login100-form-btn">
                        <button class="login100-form-btn">
                            Login
                        </button>
                    </div>


                    <div class="text-center p-t-136">
                        <a class="txt2" href="{{route('login')}}">
                            <i class="fa fa-mail-reply m-l-5" aria-hidden="true"></i>
                            Back Login
                           
                        </a>
                    </div>
                </form>
</div>
@endsection
