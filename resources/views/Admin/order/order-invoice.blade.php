@extends('Admin.master')
@section('title')
    Manage Order
@endsection
@section('content')
    <div class="container">
        <div class="row">
            <hr/>
            <div class="col-sm-12" style="margin-top:5%">
                <div class="panel">
                    <div class="panel-heading">
                        Order Information
                    </div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <h1>Company Logo</h1>
                            </div>
                            <div class="col-sm-4">
                                <h3>Order Id: #</h3>
                                <p><b>Customer Name: {{ $allDetail->first_name.' '.$allDetail->last_name }}</b></p>
                                <p><b>Order Date: {{ $allDetail->created_at }}</b></p>
                            </div>
                        </div>
                        <div class="row" style="padding-top:40px">
                            <div class="col-sm-4">
                                <p><b>From:</b></p>
                                <p>Company Name</p>
                                <p>Address Line 1</p>
                                <p>Address Line 2</p>
                            </div>
                            <div class="col-sm-4">
                                <h5><b>TO:</b></h5>
                                <p>Name: {{ $allDetail->full_name }}</p>
                                <p>Email: {{ $allDetail->email }}</p>
                                <p>Phone Number: {{ $allDetail->phone_number }}</p>
                                <p>Address: {{ $allDetail->address }}</p>
                            </div>
                            <div class="col-sm-4">
                                <h5><b>Payment:</b></h5>
                                <p>Payment Type: {{ $allDetail->payment_type }}</p>
                                <p>Payment Status: {{ $allDetail->payment_status = 'panding' ? 'due' : '' }}</p>
                            </div>
                        </div>
                        <div class="row" style="padding-top:40px">
                            <div class="col-sm-12">
                                <table class="table table-bordered table-hover">
                                    <tr class="">
                                        <th>SL NO</th>
                                        <th>Product Name</th>
                                        <th>Product Quantity</th>
                                        <th>Product Price</th>
                                        <th>Tax</th>
                                        <th>Discount</th>
                                        <th>SubTotal</th>
                                    </tr>
                                    <tr>
                                        <th colspan="6"></th>
                                        <th></th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection