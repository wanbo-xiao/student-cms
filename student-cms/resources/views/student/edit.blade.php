@extends('master')

@section('title')
    Edit detiles 
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="/student/home"><button class="btn btn-info">Personal details</button></a>
                </div>
                @include('errors.list')
                <div class="panel-body">
                    <form action="update" method="POST" class="form-horizontal" role="form">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <label for="id" class="col-md-2 control-label">ID</label>
                            <div class="col-md-6">
                                <input type="text" name='id' value="{{Auth::user()->id}}" class="form-control" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="name" class="col-md-2 control-label">Name</label>
                            <div class="col-md-6">
                                <input type="text" name='name' value="{{Auth::user()->name}}" class="form-control" readonly />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="gender" class="col-md-2 control-label">Gender</label>
                            <div class="col-md-6">
                                <select name="gender" class="form-control">
                                    <option value="M" {{(Auth::user()->gender == 'M') ? "selected" : ""}}>Male</option>
                                    <option value="F" {{(Auth::user()->gender == 'F') ? "selected" : ""}}>Female</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="phone" class="col-md-2 control-label">Phone</label>
                            <div class="col-md-6">
                                <input type="text" name='phone' value="{{Auth::user()->phone}}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pro_class" class="col-md-2 control-label">Class</label>
                            <div class="col-md-6">
                                <input type="text" name='pro_class' value="{{Auth::user()->pro_class}}" class="form-control" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="email" class="col-md-2 control-label">Email</label>
                            <div class="col-md-6">
                                <input type="text" name='email' value="{{Auth::user()->email}}" class="form-control" />
                            </div>
                        </div>
                        <div class="group">
                            <input type="submit" class="btn btn-success form-control" value="update" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop