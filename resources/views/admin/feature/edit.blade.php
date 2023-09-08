@extends('layouts.admin')

@section('content')

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
        <!-- Basic example -->
        <div class="col-xl-6">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Property Feature
                        <a href="{{ url('admin/feature') }}" class="btn btn-primary float-right">Back</a>
                    </h3></div>
                <div class="card-body">
                    <form action="{{ url('admin/feature/update/'.$feature->id) }}" method="Post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="exampleInputEmail1">Name</label>
                            <input type="text" value="{{ $feature->name }}" class="form-control" name="name">
                        </div>
                        <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                    </form>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->
        </div>
    </div>

</div>

@endsection
