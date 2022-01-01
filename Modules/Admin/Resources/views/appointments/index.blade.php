@extends('admin::layouts.master')
@section('title', 'Appointments - Admin')
@section('name', 'Appointment - Admin')
@section('content')
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card card-plain table-plain-bg">
                                <div class="card-header ">
                                    <h4 class="card-title">Appointments</h4>
                                </div>
                                <div class="card-body table-full-width table-responsive">
                                    <table class="table table-hover">
                                        <thead>
                                            <th>Sr.</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Gender</th>
                                            <th>Time</th>
                                        </thead>
                                        <tbody>
                                            @foreach($appointments as $appointment)
                                            <tr onclick="window.location.href = '/admin/appointment/{{ $appointment->id }}' ">
                                                <td>  {{ $appointment->id }} </td>
                                                <td> {{ $appointment->fname }} {{ $appointment->lname }}</td>
                                                <td> {{ $appointment->phone }} </td>
                                                <td>  {{ $appointment->email }} </td>
                                                <td> {{ $appointment->gender }}</td>
                                                <td> {{ $appointment->datetime }} </td>

                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
