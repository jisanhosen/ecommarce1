@extends('FrontEnd.master')
@section('title')
    Register Or Login
@endsection
@section('contant')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Register</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="register">
                    <h2 style="font-weight:300">You have to login to complete your valuable order. If you are not register please register first.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6  register-top-grid">
                <div class="register">
                    <h2>Login</h2>
                    <form action="#" method="post">
                        {{ csrf_field() }}
                        <div class="col-sm-6">
                            <span>Email Address</span>
                            <input class="form-control" type="email" name="email">
                        </div>
                        <div class="col-sm-6">
                            <span>Password</span>
                            <input class="form-control" type="password" name="password">
                        </div>
                        <div class="col-sm-12" style="margin-top:20px">
                            <input type="submit" name="btn" value="Login" class="btn btn-danger"/>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-6  register-top-grid">
                <div class="register">
                    <h2>Register</h2>
                    <form action="{{ url('/customer-register') }}" method="post">
                        {{ csrf_field() }}
                        <div class="mation">
                            <span>First Name</span>
                            <input class="form-control" type="text" name="first_name">

                            <span>Last Name</span>
                            <input class="form-control" type="text" name="last_name">

                            <span>Email Address</span>
                            <input class="form-control" type="email" name="email">

                            <span>Password</span>
                            <input class="form-control" type="password" name="password">

                            <span>Phone Number</span>
                            <input class="form-control" type="number" name="phone_number">

                            <span>Address</span>
                            <textarea class="form-control" name="address"></textarea>

                            <br/>
                            <input type="submit" name="btn" value="Register" class="btn btn-success"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection