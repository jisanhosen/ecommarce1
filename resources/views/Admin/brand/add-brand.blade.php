@extends('Admin.master')
@section('title')
    Add Brand
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-12" style="margin:0 0 0 1%">
            <br/><br/><br/><br/>
            <hr/>
            <section class="panel">
                <header class="panel-heading">
                    Add Brand Form
                </header>
                <div class="panel-body">
                    @if($message = Session::get('message'))
                        <h1 class="text-center text-success">{{ $message }}</h1>
                        <hr/>
                    @endif
                    <div class=" form">
                        <form class="form-horizontal" action="{{ url('/brand/new') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group ">
                                <label class="control-label col-lg-3">Brand Name</label>
                                <div class="col-lg-8">
                                    <input class=" form-control" name="brand_name" type="text" required>
                                </div>
                            </div>
                            <div class="form-group ">
                                <label class="control-label col-lg-3">Brand Description</label>
                                <div class="col-lg-8">
                                    <textarea class="form-control" name="brand_description"></textarea>
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
                                    <button type="submit" class="btn btn-success btn-block">Save Brand Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection