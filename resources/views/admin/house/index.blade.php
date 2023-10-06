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
                        <h3 class="card-title">List of Properties
                            <a href="{{ url('admin/house/create ') }}" class="btn btn-purple float-right">Add Property</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>S/N </th>
                                            <th>Image</th>
                                            <th>Type</th>
                                            <th>Name</th>
                                            <th>Status</th>
                                            <th>Agent</th>
                                            <th>Price</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @forelse ($house as $hou)

                                    <tr>
                                        <td>{{ $hou->id }}</td>
                                        <td>
                                            <img src="{{config('app.url').$hou->images[0]->img_url?? 'no image' }}" width="50" alt="">
                                        </td>
                                        <td>{{ $hou->title }}</td>
                                        <td>{{ $hou->types->name }}</td>
                                        <td>{{ $hou->status->name ?? '' }}</td>
                                        <td>{{ optional($hou->users)->name }}</td>
                                        <td>{{ $hou->price }}</td>
                                        <td>
                                            <a href="{{ url('admin/house/edit/'.$hou->id) }}" class="btn btn-outline-primary"><i class="mdi mdi-account-edit-outline"></i></a>
                                            <a href="{{ url('admin/house/delete/'.$hou->id) }}" class="btn btn-outline-danger"><i class="mdi mdi-delete"></i></a>
                                        </td>
                                    </tr>
                                    @empty

                                    @endforelse
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
