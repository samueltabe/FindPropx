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
            <div class="col-lg-5">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">List of Property Type.
                            <a href="{{ url('admin/type/create') }}" class="btn btn-purple float-right">Add Type</a>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                       @forelse ($type as $ty )

                                       <tr>
                                           <td>{{ $ty->name }}</td>
                                           <td>
                                               <a href="{{ url('admin/type/edit/'.$ty->id) }}" class="btn btn-outline-primary"><i class="mdi mdi-account-edit-outline"></i></a>
                                               <a href="{{ url('admin/type/delete/'.$ty->id) }}" class="btn btn-outline-danger"><i class="mdi mdi-delete"></i></a>
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
