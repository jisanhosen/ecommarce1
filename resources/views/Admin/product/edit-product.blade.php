@extends('Admin.master')
@section('title')
    Edit Product
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12" style="margin:0 0 0 1%">
            <br/><br/><br/><br/>
            <hr/>
            <section class="panel">
                <header class="panel-heading">
                    Add Product Form
                </header>
                <div class="panel-body">
                    @if($message = Session::get('message'))
                        <h1 class="text-center text-success">{{ $message }}</h1>
                        <hr/>
                    @endif
                    <div class=" form">
                        {{--<form class="form-horizontal" action="" method="POST" enctype="multipart/form-data">--}}
                        {{ Form::open(['url'=>'/product/update', 'name'=>'editForm', 'method'=>'POST', 'class'=>'form-horizontal', 'enctype'=>'multipart/form-data']) }}
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Product Name</label>
                            <div class="col-lg-8">
                                <input class=" form-control" name="product_name" type="text" value="{{ $editProductById->product_name }}">
                                <input class=" form-control" name="product_id" type="hidden" value="{{ $editProductById->id }}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Category Name</label>
                            <div class="col-lg-8">
                                <select class="form-control" name="category_id">
                                    <option>---Select Category Name---</option>
                                    @foreach($publishedCategories as $publishedCategory)
                                        <option value="{{ $publishedCategory->id }}">{{ $publishedCategory->category_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Brand Name</label>
                            <div class="col-lg-8">
                                <select class="form-control" name="brand_id">
                                    <option>---Select Brand Name---</option>
                                    @foreach($publishedBrands as $publishedBrand)
                                        <option value="{{ $publishedBrand->id }}">{{ $publishedBrand->brand_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Product Price</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="number" name="product_price" value="{{ $editProductById->product_price }}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Product Quantity</label>
                            <div class="col-lg-8">
                                <input class="form-control" type="number" name="product_quantity" value="{{ $editProductById->product_quantity }}">
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Product Short Description</label>
                            <div class="col-lg-8">
                                <textarea class="form-control" name="product_short_description">{{ $editProductById->product_short_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Product Long Description</label>
                            <div class="col-lg-8">
                                <textarea class="form-control editor" rows="20" name="product_long_description">{{ $editProductById->product_long_description }}</textarea>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Product Image</label>
                            <div class="col-lg-8">
                                <input type="file" name="product_image" accept="image/*"/>
                                <span><img src="{{ asset($editProductById->product_image) }}" alt="image" style="width:auto; height:100px"></span>
                            </div>
                        </div>
                        <div class="form-group ">
                            <label class="control-label col-lg-3">Publication Status</label>
                            <div class="col-lg-8">
                                <select class="form-control" name="publication_status">
                                    <option>---Select Publication Status---</option>
                                    <option value="1">Published</option>
                                    <option value="0">Unpublished</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-lg-offset-3 col-lg-6">
                                <input type="submit" class="btn btn-success" value="Save">
                                <button class="btn btn-default" type="button">Cancel</button>
                            </div>
                        </div>
                        {{ Form::close() }}
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script>
        document.forms['editForm'].elements['category_id'].value = '{{$editProductById->category_id}}';
        document.forms['editForm'].elements['brand_id'].value = '{{$editProductById->brand_id}}';
        document.forms['editForm'].elements['publication_status'].value = '{{$editProductById->publication_status}}';
    </script>
@endsection