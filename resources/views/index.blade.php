@extends('layouts.default')
{{-- Page title --}}
@section('title')
    Dashboard @parent
@stop
{{-- page level styles --}}
@section('header_styles')
    <link href="{{ asset('css/dashboard.css') }}" rel="stylesheet">
@stop
@section('content')
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li class="active">
                <a href="{{ url('/') }}">
                    <i class="fa fa-dashboard"></i> Dashboard
                </a>
            </li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-3">
                <div class="card card-primary card-outline" style="height: 280px;">
                    <div class="card-header">
                        <h3 class="card-title">Total Users</h3>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">150</h1>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-primary btn-block">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-success card-outline" style="height: 280px;">
                    <div class="card-header">
                        <h3 class="card-title">Bounce Rate</h3>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">53<sup style="font-size: 20px">%</sup></h1>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-success btn-block">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-warning card-outline" style="height: 280px;">
                    <div class="card-header">
                        <h3 class="card-title">User Registrations</h3>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">44</h1>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-warning btn-block">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card card-danger card-outline" style="height: 280px;">
                    <div class="card-header">
                        <h3 class="card-title">Unique Visitors</h3>
                    </div>
                    <div class="card-body">
                        <h1 class="text-center">65</h1>
                    </div>
                    <div class="card-footer">
                        <a href="#" class="btn btn-danger btn-block">More info <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

