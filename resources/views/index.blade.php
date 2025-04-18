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
    </section>
    <section class="content">
        <div class="row">
            <div class="col-md-6">
                <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3 class="card-title">Active Doctors List</h3>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>Name</th>
                                    <th style="width: 40px">Designation</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $users = \App\Models\User::select('users.*', 'roles.name as role', 'designations.desi_name as designation')
                                            ->leftjoin('roles', 'users.group_id', '=', 'roles.id')
                                            ->leftjoin('designations', 'users.designation_id', '=', 'designations.id')
                                            ->where('roles.key', '=', 'doctor')
                                            ->where('users.last_activity', '>', now()->subMinutes(3))
                                            ->get();
                                @endphp
                                @foreach ($users as $index => $doctor)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td>{{ $doctor->name . ' ' . $doctor->last_name }}</td>
                                        <td>{{ $doctor->designation }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop

