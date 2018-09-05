@extends('Admin.master')
@section('title')
    Manage Category
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
                            <th>Category Id</th>
                            <th>Category Name</th>
                            <th>Category Description</th>
                            <th>Publication Status</th>
                            <th>Action</th>
                        </tr>
                        @foreach($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->category_description }}</td>
                                <td>{{ $category->publication_status }}</td>
                                <td>
                                    <a href="{{ url('/category/edit/'.$category->id) }}" class="btn btn-primary btn-xs" title="Edit_category">
                                        <span class="glyphicon glyphicon-edit text-dark"></span>
                                    </a>
                                    <a href="{{ url('/category/delete/'.$category->id) }}" class="btn btn-danger btn-xs" title="Delete_category" onclick="return confirm('Are you  sure delete this')">
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