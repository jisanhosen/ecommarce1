@extends('FrontEnd.master')
@section('title')
    Complete Order
@endsection
@section('contant')
    <div class="container">
        <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
                <div class="register">
                    <h2>Your order request successful. We will contact you soon.</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="register text-center">
                    <a href="{{ url('/') }}" class="btn btn-danger">New Order</a>
                </div>
            </div>
        </div>
    </div>
@endsection