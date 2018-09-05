@extends('Admin.master')
@section('title')
    View Order
@endsection
@section('content')
    <div class="row">
        <br/><br/><br/><br/><hr/>
        <div class="col-sm-12">
            <div class="panel">
                <div class="panel-body">
                    <h3>Customer Information</h3>
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Customer Name</th>
                            <td>{{ $customer->first_name.' '.$customer->last_name }}</td>
                        </tr>
                        <tr>
                            <th>Customer Email</th>
                            <td>{{ $customer->email }}</td>
                        </tr>
                        <tr>
                            <th>Customer Number</th>
                            <td>{{ $customer->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Customer Address</th>
                            <td>{{ $customer->address }}</td>
                        </tr>
                    </table>
                    <hr/>
                    <h3>Shipping Information</h3>
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Shipping Name</th>
                            <td>{{ $shipping->full_name }}</td>
                        </tr>
                        <tr>
                            <th>Shipping Email</th>
                            <td>{{ $shipping->email }}</td>
                        </tr>
                        <tr>
                            <th>Shipping Number</th>
                            <td>{{ $shipping->phone_number }}</td>
                        </tr>
                        <tr>
                            <th>Shipping Address</th>
                            <td>{{ $shipping->address }}</td>
                        </tr>
                    </table>
                    <hr/>
                    <h3>Product Information Details</h3>
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>SL NO</th>
                            <th>Product Name</th>
                            <th>Product Price</th>
                            <th>Product Quantity</th>
                            <th>Discount</th>
                            <th>Tax</th>
                            <th>SubTotal</th>
                        </tr>
                        <?php $i=1; $total= 0 ?>
                        @foreach($orderDetails as $orderDetail)
                        <td>{{ $i++ }}</td>
                        <td>{{ $orderDetail->product_name }}</td>
                        <td>{{ $orderDetail->product_price }}</td>
                        <td>{{ $qty = $orderDetail->product_quantity }}</td>
                        <td>{{ $discount = $orderDetail->product_price*30/100 }}</td>
                        <td>{{ $tax = $orderDetail->product_price*20/100 }}</td>
                        <td>BDT. {{ $itemTotal = ($orderDetail->product_price*$qty)+($tax*$qty)-($discount*$qty) }}</td>
                        @php($total = $total+$itemTotal)
                        @endforeach
                        <tr>
                            <th colspan="6" class="text-right"><b>Total =</b></th>
                            <th><b>BDT. {{ $total }}</b></th>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection