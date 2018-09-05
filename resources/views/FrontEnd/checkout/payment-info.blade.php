@extends('FrontEnd.master')
@section('title')
    Select Payment Method
@endsection
@section('contant')
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-sm-offset-3">
                <div class="text-center text-danger" style="border:1px #9d9f9e solid; border-radius:5px">
                    <form action="{{ url('/new-order') }}" method="POST">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="radio" name="payment_type" value="Cash On Delivery"/>
                            <label>Cash On Delivery</label>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="payment_type" value="Bkash"/>
                            <label>Bkash</label>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="payment_type" value="Paypal"/>
                            <label>Paypal</label>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="payment_type" value="Visa"/>
                            <label>Visa</label>
                        </div>
                        <div class="form-group">
                            <input type="radio" name="payment_type" value="Mastercard"/>
                            <label>Mastercard</label>
                        </div>
                        <div class="form-group">
                            <input type="submit" name="btn" value="Confirm Order" class="btn btn-success"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection