@extends('Admin.master')
@section('title')
    Manage Product
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <br/><br/><br/><br/>
            <hr/>
            <div class="panel">
                <div class="panel-body">
                    @if($message = Session::get('message'))
                        <h1 class="text-success text-center">{{ $message }}</h1>
                        <hr/>
                    @endif
                    <table class="table table-bordered table-hover">
                        <tr>
                            <td>Product Id</td>
                            <td>Product Name</td>
                            <td>Category Name</td>
                            <td>Brand Name</td>
                            <td>Product Price</td>
                            <td>Publication Status</td>
                            <td>Action</td>
                        </tr>
                        @foreach($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->product_name }}</td>
                            <td>{{ $product->category_name }}</td>
                            <td>{{ $product->brand_name }}</td>
                            <td>{{ $product->product_price }}</td>
                            <td>{{ $product->publication_status }}</td>
                            <td>
                                <a href="{{ url('/product/view/'.$product->id) }}" class="btn btn-success btn-xs" title="View_Product">
                                    <span class="glyphicon glyphicon-zoom-in"></span>
                                </a>
                                @if($product->publication_status == 1)
                                <a href="{{ url('/product/unpublished/'.$product->id) }}" class="btn btn-default btn-xs" title="Unpublished_Product">
                                    <span class="glyphicon glyphicon-arrow-up"></span>
                                </a>
                                @else
                                <a href="{{ url('/product/published/'.$product->id) }}" class="btn btn-warning btn-xs" title="Published_Product">
                                <span class="glyphicon glyphicon-arrow-down"></span>
                                </a>
                                @endif
                                <a href="{{ url('/product/edit/'.$product->id)}}" class="btn btn-primary btn-xs" title="Edit_Product">
                                    <span class="glyphicon glyphicon-edit"></span>
                                </a>
                                <a href="{{ url('/product/delete/'.$product->id) }}" class="btn btn-danger btn-xs" title="Delete_Product" onclick="return confirm('Are you sure delete this')">
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