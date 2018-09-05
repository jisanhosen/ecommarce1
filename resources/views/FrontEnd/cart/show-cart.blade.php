@extends('FrontEnd.master')
@section('title')
    Show Cart
@endsection
@section('contant')
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <table class="table-hover table-bordered">
                    <tr>
                        <td>SL NO</td>
                        <td>Product Name</td>
                        <td>Product Price</td>
                        <td>Product Quentity</td>
                        <td>Discount</td>
                        <td>Tax</td>
                        <td>SubTotal Price</td>
                        <td>Action</td>
                    </tr>
                    <?php $i=1; $total = 0 ?>
                    @foreach($cartproducts as $cartproduct)
                    <tr>
                        <td>{{ $i++ }}</td>
                        <td>{{ $cartproduct->name }}</td>
                        <td>BDT. {{ $cartproduct->price }}</td>
                        <td>
                            <form action="{{ url('/update-cart-product') }}" method="POST">
                                {{ csrf_field() }}
                                <input type="number" name="qty" value="{{ $qty = $cartproduct->qty }}"/>
                                <input type="hidden" name="rowId" value="{{ $cartproduct->rowId }}"/>
                                <input type="submit" name="btn" value="Update"/>
                            </form>
                        </td>
                        <td>BDT. {{ $discount = $cartproduct->price*30/100 }}</td>
                        <td>BDT. {{ $tax = $cartproduct->price*20/100 }}</td>
                        <td>BDT. {{ $itemTotal = ($cartproduct->price*$qty)+($tax*$qty)-($discount*$qty) }}</td>
                        <td>
                            <a href="{{ url('/delete-cart-item/'.$cartproduct->rowId) }}">Delete</a>
                        </td>
                    </tr>
                        <?php $total = $total+$itemTotal ?>
                    @endforeach
                    <tr>
                        <td colspan="6" class="text-right"><b>Grand Total = </b></td>
                        <td><b>BDT. {{ $order_total = $total }}</b></td>
                        <td class="text-center">-------</td>
                    </tr>
                    {{ Session::put('order_total', $order_total) }}
                </table>
            </div>
        </div>
        <div class="row">
            <div class="text-center">
                <a href="{{ url('/') }}" class="btn btn-danger">Continue Shopping</a>
                @if(Session::get('customerId') && Session::get('shippingId'))
                <a href="{{ url('/payment-info') }}" class="btn btn-danger">CheckOut</a>
                @elseif(Session::get('customerId'))
                <a href="{{ url('/shipping-info') }}" class="btn btn-danger">CheckOut</a>
                @else
                <a href="{{ url('/checkout') }}" class="btn btn-danger">CheckOut</a>
                @endif
            </div>
        </div>
    </div>
@endsection