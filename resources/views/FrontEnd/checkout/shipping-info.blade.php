@extends('FrontEnd.master')
@section('title')
    Shipping Information
@endsection
@section('contant')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Shipping Information</li>
            </ol>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="register">
                    <h2>Welcome {{ Session::get('customerName') }}</h2>
                    <h2 style="font-weight:300">You have to give us your shipping information for complete your valuable order. If need change shipping info please change shipping information.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-8 col-sm-offset-2  register-top-grid">
                <div class="register">
                    <h2>Shipping Information</h2>
                    <form action="{{ url('/new-shipping') }}" method="post">
                        {{ csrf_field() }}
                        <div class="mation">
                            <span>Name</span>
                            <input class="form-control" type="text" value="{{ $customerInfo->first_name.' '.$customerInfo->last_name }}" name="full_name">

                            <span>Email Address</span>
                            <input class="form-control" type="email" value="{{ $customerInfo->email }}" name="email">

                            <span>Phone Number</span>
                            <input class="form-control" type="number" value="{{ $customerInfo->phone_number }}" name="phone_number">

                            <span>Address</span>
                            <textarea class="form-control" name="address">{{ $customerInfo->address }}</textarea>

                            <br/>
                            <input type="submit" name="btn" value="Save Shipping Info" class="btn btn-success"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection