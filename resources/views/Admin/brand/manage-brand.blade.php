@extends('Admin.master')
@section('title')
    Manage Brand
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12" style="margin:0 0 0 1%">
            <br/><br/><br/><br/>
            <hr/>
            <section class="panel">
                <div class="panel-body">
                    @if($message = Session::get('message'))
                        <h1 class="text-center text-success">{{ $message }}</h1>
                        <hr/>
                    @endif
                    <table class="table table-bordered table-hover">
                        <tr>
                            <th>Brand Id</th>
                            <th>Brand Name</th>
                            <th>Brand Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($brands as $brand)
                            <tr>
                                <td>{{ $brand->id }}</td>
                                <td>{{ $brand->brand_name }}</td>
                                <td>{{ $brand->brand_description }}</td>
                                <td>{{ $brand->publication_status }}</td>
                                <td>
                                    <a href="{{ url('/brand/edit/'.$brand->id) }}" class="btn btn-primary btn-xs" title="Edit_category">
                                        <span class="glyphicon glyphicon-edit text-dark"></span>
                                    </a>
                                    <a href="{{ url('/brand/delete/'.$brand->id) }}" class="btn btn-danger btn-xs" title="Delete_category" onclick="return confirm('Are you  sure delete this')">
                                        <span class="glyphicon glyphicon-trash text-dark"></span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </table>
                </div>
            </section>
        </div>
    </div>
@endsection