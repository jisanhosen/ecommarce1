@extends('Admin.master')
@section('title')
    Edit Category
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12" style="margin:0 0 0 1%">
            <br/><br/><br/><br/>
            <hr/>
            <section class="panel">
                <header class="panel-heading">
                    Edit Category Form
                </header>
                <div class="panel-body">
                    <div class=" form">
                        <form name="editForm" class="form-horizontal" action="{{ url('/category/update') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group ">
                                <label class="control-label col-lg-3">Category Name</label>
                                <div class="col-lg-8">
                                    <input class=" form-control" name="category_name" type="text" value="{{ $categoryById->category_name }}" required>
                                    <input class=" form-control" name="category_id" type="hidden" value="{{ $categoryById->id }}">
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-lg-3">Category Description</label>
                                <div class="col-lg-8">
                                    <textarea class="form-control" name="category_description">{{ $categoryById->category_description }}</textarea>
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
                                <div class="col-lg-offset-3 col-lg-8">
                                    <button type="submit" class="btn btn-success btn-block">Update Category Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <script>
        document.forms['editForm'].elements['publication_status'].value='{{ $categoryById->publication_status }}';
    </script>
@endsection