@extends('Admin.master')
@section('title')
    View Product
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <br/><br/><br/><br/><hr/>
            <div class="panel">
                <div class="panel-body">
                    <table class="table table-hover table-bordered">
                        <tr>
                            <th>Product Id</th>
                            <td>{{ $productViewById->id }}</td>
                        </tr>
                        <tr>
                            <th>Product Name</th>
                            <td>{{ $productViewById->product_name }}</td>
                        </tr>
                        <tr>
                            <th>Category Name</th>
                            <td>{{ $productViewById->category_name }}</td>
                        </tr>
                        <tr>
                            <th>Brand Name</th>
                            <td>{{ $productViewById->brand_name }}</td>
                        </tr>
                        <tr>
                            <th>Product Price</th>
                            <td>{{ $productViewById->product_price }}</td>
                        </tr>
                        <tr>
                            <th>Product Quantity</th>
                            <td>{{ $productViewById->product_quantity }}</td>
                        </tr>
                        <tr>
                            <th>Product Short Description</th>
                            <td>{{ $productViewById->product_short_description }}</td>
                        </tr>
                        <tr>
                            <th>Product Long Description</th>
                            <td>{{ $productViewById->product_long_description }}</td>
                        </tr>
                        <tr>
                            <th>Product Image</th>
                            <td><img src="{{ asset($productViewById->product_image) }}" alt="image" style="width:auto; height:150px"></td>
                        </tr>
                        <tr>
                            <th>Publication Status</th>
                            <td>{{ $productViewById->publication_status ==1 ? 'Published' : 'Unpublished'}}</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection