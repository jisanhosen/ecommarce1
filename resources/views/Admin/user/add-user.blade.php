@extends('Admin.master')
@section('title')
    Add User
@endsection
@section('content')
    <div class="row">
        <div class="col-sm-8 col-sm-offset-2">
            <br/><br/><br/><br/>
            <hr/>
            <section class="panel">
                <header class="panel-heading">
                    Add User Form
                </header>
                <div class="panel-body">
                    @if($message = Session::get('message'))
                        <h1 class="text-center text-success">{{ $message }}</h1>
                        <hr/>
                    @endif
                    <div class=" form">
                        <form class="form-horizontal" action="{{ url('/register') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group ">
                                <label class="control-label col-lg-3">Name</label>
                                <div class="col-lg-8">
                                    <input class=" form-control" name="name" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">E-mail Address</label>
                                <div class="col-lg-8">
                                    <input type="text" class="form-control" name="email_address"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Password</label>
                                <div class="col-lg-8">
                                    <input type="password" class="form-control" name="password"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-lg-3">Confirm Password</label>
                                <div class="col-lg-8">
                                    <input type="password" class="form-control" name="confirm_password"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-offset-3 col-lg-8">
                                    <button type="submit" class="btn btn-success">Save User Info</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection