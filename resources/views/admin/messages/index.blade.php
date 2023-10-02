@extends('layouts.admin')

@section('content')


    <!-- Start Content-->
    <div class="container-fluid">

        <!--Widget-4 -->
        <div class="row">
            <div class="col-md-12">
                @if(Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List of Messages</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>Subject</th>
                                            <th>Message</th>
                                            <th>Date Sent</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($message as $msg )
                                        <tr>
                                            <td>{{ $msg->name }}</td>
                                            <td>{{ $msg->phone }}</td>
                                            <td>{{ $msg->email }}</td>
                                            <td>{{ $msg->subject }}</td>
                                            <td>{{ Str::limit($msg->message, 15) }}</td>
                                            <td>{{ ($msg->created_at)->diffForHumans() }}</td>
                                            <td class="d-flex">
                                                <a href="" class="btn btn-outline-success mx-1"><i class="mdi mdi-eye-circle-outline"></i></a>
                                                <a href="" class="btn btn-outline-danger mx-1"><i class="mdi mdi-delete"></i></a>
                                            </td>
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
