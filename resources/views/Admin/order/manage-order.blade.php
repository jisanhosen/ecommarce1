@extends('Admin.master')
@section('title')
    Manage Order
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12" style="margin:5% 0 0 0">
            <hr/>
            <div class="panel">
                <div class="panel-body">
                    <div class="panel-heading">
                        <h2 class="text-success">Order Table</h2>
                    </div>
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>SL NO</th>
                            <th>Order Id</th>
                            <th>Customer Name</th>
                            <th>Order Total</th>
                            <th>Order Status</th>
                            <th>Payment Type</th>
                            <th>Payment Status</th>
                            <th>Order Date</th>
                            <th>Action</th>
                        </tr>
                        @php($i=1)
                        @foreach($orders as $order)
                            <tr>
                                <td>{{ $i++ }}</td>
                                <td>{{ $order->id }}</td>
                                <td>{{ $order->first_name.' '.$order->last_name }}</td>
                                <td>BDT. {{ $order->order_total }}</td>
                                <td>{{ $order->order_status }}</td>
                                <td>{{ $order->payment_type }}</td>
                                <td>{{ $order->payment_status }}</td>
                                <td>{{ $order->created_at }}</td>
                                <td style="display:inline;">
                                    <a href="{{ url('/order/view/'.$order->id) }}" class="btn btn-success btn-xs" title="View Order">
                                        <span class="glyphicon glyphicon-zoom-in"></span>
                                    </a>
                                    <a href="{{ url('/order/invoice/') }}" class="btn btn-warning btn-xs" title="View Order Invoice">
                                        <span class="glyphicon glyphicon-book"></span>
                                    </a>
                                    <a href="{{ url('/order/download/') }}" class="btn btn-default btn-xs" title="Download Order Invoice">
                                        <span class="glyphicon glyphicon-download"></span>
                                    </a>
                                    <a href="{{ url('/order/edit/')}}" class="btn btn-primary btn-xs" title="Edit Order">
                                        <span class="glyphicon glyphicon-edit"></span>
                                    </a>
                                    <a href="{{ url('/order/delete/') }}" class="btn btn-danger btn-xs" title="Delete Order" onclick="return confirm('Are you sure delete this')">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection