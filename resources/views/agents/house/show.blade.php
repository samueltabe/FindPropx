@extends('layouts.agent')
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
        <div class="col-xl-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Property Details</h3></div>
                <div class="card-body">
                    <div class="row py-3">
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Property Title</label>
                                <h5>{{ $house->title }}</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Property Type</label>
                                    <h5>{{ $house->types->name }}</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Rent Price</label>
                                    <h5>{{ $house->price }}</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Sale</label>
                                    <h5>{{ $house->sale_price }}</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Size</label>
                                    <h5>{{ $house->area }}</h5>
                            </div>
                        </div>
                        <div class="col-md-2">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Rooms</label>
                                    <h5>{{ $house->rooms }}</h5>
                            </div>
                        </div>
                    </div>
                       <div class="row py-3">
                           <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Property Description</label>
                                    <textarea class="form-control" rows="14" id="example-textarea-input" name="description">{{ $house->description }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Property Video</label>
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe width="560" height="315" src="{{$house->video ?? 'No Video'}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                       </div>
                       <div class="row py-3">
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">State</label>
                                <h5>{{ $house->states->name }}</h5>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">LGA</label>
                                <h5>{{ $house->lgas->local_name }}</h5>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">City</label>
                                <h5>{{ $house->city }}</h5>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <h5>{{ $house->status->name }}</h5>
                            </div>
                        </div>

                       </div>
                       <div class="row py-3">
                        <div class="col-md-12">
                            <div class="form-group ">
                                <label for="image" class="image">Property Images</label>
                                <div class="row">
                                    @foreach($house->images as $image)
                                    <div class="col-md-3">
                                        <img class="img-fluid" src="{{ asset($image->img_url) }}" style="width: 600px; height:300px " alt="">
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                       </div>
                       <div class="row py-3">
                        <div class="col-md-12">
                            <div class="form-group">
                                <div class="checkbox checkbox-primary">
                                    @foreach ($features as $feature)
                                        <input type="checkbox" name="features[]" value="{{ $feature->id }}" id="feature-{{ $feature->id }}">
                                        <label for="feature-{{ $feature->id }}">{{ $feature->name }}</label>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                       </div>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->

        </div>
    </div>

</div>

@endsection
