@extends('FrontEnd.master')
@section('title')
    Checkout Product
@endsection
@section('contant')
    <div class="breadcrumbs">
        <div class="container">
            <ol class="breadcrumb breadcrumb1 animated wow slideInLeft animated" data-wow-delay=".5s" style="visibility: visible; animation-delay: 0.5s; animation-name: slideInLeft;">
                <li><a href="{{ url('/') }}"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>Home</a></li>
                <li class="active">Checkout</li>
            </ol>
        </div>
    </div>
    <!---->
    <div class="container">
        <div class="check-out">
            <h2>Checkout</h2>
            <table >
                <tr>
                    <th>Item</th>
                    <th>Qty</th>
                    <th>Prices</th>
                    <th>Delivery details</th>
                    <th>Sub total</th>
                </tr>
                <tr>
                    <td class="ring-in"><a href="single.html" class="at-in"><img src="{{ asset('FrontEnd/') }}/images/ce.jpg" class="img-responsive" alt=""></a>
                        <div class="sed">
                            <h5>Sed ut perspiciatis unde</h5>
                            <p>(At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium) </p>

                        </div>
                        <div class="clearfix"> </div></td>
                    <td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>
                    <td>$100.00</td>
                    <td>FREE SHIPPING</td>
                    <td>$100.00</td>
                </tr>
                <tr>
                    <td class="ring-in"><a href="single.html" class="at-in"><img src="{{ asset('FrontEnd/') }}/images/ce1.jpg" class="img-responsive" alt=""></a>
                        <div class="sed">
                            <h5>Sed ut perspiciatis unde</h5>
                            <p>(At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium ) </p>
                        </div>
                        <div class="clearfix"> </div></td>
                    <td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>
                    <td>$200.00</td>
                    <td>FREE SHIPPING</td>
                    <td>$200.00</td>
                </tr>
                <tr>
                    <td class="ring-in"><a href="single.html" class="at-in"><img src="{{ asset('FrontEnd/') }}/images/ce2.jpg" class="img-responsive" alt=""></a>
                        <div class="sed">
                            <h5>Sed ut perspiciatis unde</h5>
                            <p>(At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium) </p>
                        </div>
                        <div class="clearfix"> </div></td>
                    <td class="check"><input type="text" value="1" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='';}"></td>
                    <td>$150.00</td>
                    <td>FREE SHIPPING</td>
                    <td>$150.00</td>
                </tr>
            </table>
            <a href="#" class=" to-buy">PROCEED TO BUY</a>
            <div class="clearfix"> </div>
        </div>
    </div>
@endsection