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
                        <h3 class="card-title">List of Users</h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12 col-sm-12 col-12">
                                <table id="datatable" class="table table-striped table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Phone</th>
                                            <th>Email</th>
                                            <th>LGA</th>
                                            <th>State</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                    @forelse ($users as $user)

                                    <tr>
                                        <td>
                                            <img src="{{ asset('upload/admin/'.$user->image) }}" width="50" alt="">
                                        </td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->phone ?? '' }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->lga->local_name ?? '' }}</td>
                                        <td>{{ $user->state->name ?? '' }}</td>
                                        <td>
                                            @if($user->verified)
                                                <span class="badge badge-success">Verified</span>
                                            @else
                                                <span class="badge badge-danger">Unverified</span>
                                            @endif
                                        </td>
                                        <td class="d-flex">
                                            <form method="post" action="{{ url('/admin/update-agent',$user->id) }}">
                                                @csrf
                                                {{-- <input name="name" type="hidden" value="{{$user->id}}"/> --}}
                                                <button type="submit" class="btn btn-outline-primary"><i class="mdi mdi-swap-horizontal-circle"></i></button>
                                            </form>
                                            <a href="" class="btn btn-outline-danger mx-1 disabled"><i class="mdi mdi-delete"></i></a>
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
