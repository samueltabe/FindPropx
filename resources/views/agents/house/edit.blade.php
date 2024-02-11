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
                    <h3 class="card-title">Edit Property</h3></div>
                <div class="card-body">
                    <form action="{{ url('agents/house/update/'. $house->id) }}" method="Post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                       <div class="row py-3">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Property Title</label>
                                    <input type="text" value="{{ $house->title }}" class="form-control" name="title">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Property Type</label>
                                    <select class="form-control" data-toggle="select2" name="type_id" data-placeholder="Choose a Country...">
                                        <option value="">{{ $house->types->name }}</option>
                                        @foreach ( $type as $ty )
                                        <option value="{{ $ty->id }}">{{ $ty->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                       </div>
                       <div class="row py-3">
                           <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Property Description</label>
                                    <textarea class="form-control" rows="5" id="example-textarea-input" name="description">{{ $house->description }}</textarea>
                                </div>
                           </div>
                       </div>
                       <div class="row py-3">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Price</label>
                                    <input type="text" value="{{ $house->price }}" class="form-control" name="price">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Sale Price</label>
                                    <input type="text" value="{{ $house->asle_price }}" class="form-control" name="sale_price">
                                </div>
                            </div>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Area</label>
                                    <input type="text" value="{{ $house->area }}" class="form-control" name="area">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Rooms</label>
                                    <input type="text" class="form-control" name="rooms" value="{{ $house->rooms }}">
                                </div>
                            </div>
                       </div>
                       <div class="row py-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">State</label>
                                <select id="statespicker" name="state_id" class="form-control" onchange="pickLga(this.id)" data-toggle="select2" data-placeholder="Choose a Country...">
                                    <option>{{ $house->states->name }}</option>
                                    @foreach ($state as $st )
                                    <option value="{{ $st->id }}">{{ $st->name }}</option>

                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">LGA</label>
                                <select id="lgapicker" name="lga_id" class="form-control" data-toggle="select2" data-placeholder="Choose a Country...">


                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">City</label>
                                <input type="text" value="{{ $house->city }}" class="form-control" name="city">
                            </div>
                        </div>

                       </div>
                       <div class="row py-3">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Property Status</label>
                                <select class="form-control" data-toggle="select2" name="status_id" data-placeholder="Choose a Country...">
                                    <option value="">{{ $house->status->name ?? '' }}</option>
                                    @foreach ( $status as $ty )
                                    <option value="{{ $ty->id }}">{{ $ty->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label for="image" class="image">Property Images</label>
                                <input type="file" name="images[]" value="" id="image" accept="image/*" multiple class="form-control" required>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group ">
                                <label for="image" class="image">Property Video</label>
                                <input type="text" name="video"  id="video" class="form-control">
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
                       <button type="submit" class="btn btn-purple waves-effect waves-light">Update</button>
                    </form>
                </div>
                <!-- card-body -->
            </div>
            <!-- card -->

        </div>
    </div>

</div>
<script>
    function pickLga(stateid){
        // alert(document.getElementById(stateid).value);
        var stateid_value = document.getElementById(stateid).value;
        fetch('/api/state-lga?state_id='+ stateid_value)
        .then(res => res.json())
        .then(res => {
            console.log(res)

            // res.map(lga => {
            //     let lgaElement = document.getElementById('lgapicker');
            //   lgaElement.innerHTML = `<option value=${lga.id}>${lga.local_name}</option>`
            // })

            res.map(lga => {
            let lgaElement = document.getElementById('lgapicker');
            let optionElement = document.createElement('option');
            optionElement.value = lga.id;
            optionElement.innerText = lga.local_name;
            lgaElement.appendChild(optionElement);
            });


        })
        .catch(error => {
            console.log(error)
        })



    }
</script>

@endsection
