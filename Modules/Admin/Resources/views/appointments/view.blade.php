@extends('admin::layouts.master')
@section('title', 'Appointment - Admin')

@section('content')
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <table style="width:100%">
                                <tr><td>Name</td><td>{{ $appointment->fname }} {{ $appointment->lname }}</td></tr>
                                <tr><td>Gender</td><td>{{ $appointment->gender }}</td></tr>
                                <tr><td>Phone</td><td>{{ $appointment->phone }}</td></tr>
                                <tr><td>Email</td><td>{{ $appointment->email }}</td></tr>
                                <tr><td>Date and Time</td><td>{{ $appointment->datetime }}</td></tr>
                                <tr><td>Address</td><td>{{ $appointment->address }}</td></tr>
                                <tr><td><button class="btn btn-danger" style="background:red;opacity:1;color:white">Delete</button></td><td><button class="btn btn-success" style="background:green;opacity:1;color:white">Mark as Completed</button></td></tr>
                    </div>
                </div>
            </div>
        </div>
@endsection
