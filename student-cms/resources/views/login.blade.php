@extends('master')

@section('title')
    Welcome to login
@stop

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Login</div>
                <div class="panel-body">
                    @include('errors.list')
                    <form action='/login' method='POST' class= 'form-horizontal'>
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                        <div class="form-group">
                            <span for='id',class='col-md-4 control-label'>Student ID </span>    
                            <div class="col-md-6">
                                <input name='id' class='form-control' type='text' required>
                            </div>
                        </div>
                        <div class="form-group">
                            <lable for='password',class='col-md-4 control-label'>Password</lable>  
                            <div class="col-md-6">
                                <input name='password' class='form-control' type='password' required>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <input type='submit' class='btn btn-primary form-control' value='Login' \>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@stop