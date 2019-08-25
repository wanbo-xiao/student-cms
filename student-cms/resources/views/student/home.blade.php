@extends('master')

@section('title')
Welcome home -- {{ Auth::user()->name }}
@stop

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <a href="/student/home"><button class="btn btn-info">Personal details</button></a>
                </div>
                <div class="panel-body">
                    <div class="personal-mes">
                        ID: {{ Auth::user()->id }}
                        <br />
                        Name: {{ Auth::user()->name }}
                        <br />
                        Gender:{{ (Auth::user()->gender == 'M' ) ? 'Male': 'Female'}}
                        <br />
                        Mobile: {{ Auth::user()->phone }}
                        <br />
                        Class: {{ Auth::user()->pro_class }}
                        <br />
                        Email: {{ Auth::user()->email }}
                        <hr />
                        <a href="/student/edit"><button class="btn btn-primary">Edit</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop