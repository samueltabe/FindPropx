@extends('layouts.admin')

@section('content')

<div class="container-fluid">
    <div class="wraper">
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-10">
                @if(Session::has('message'))
                <p class="alert alert-success">{{ Session::get('message') }}</p>
                @endif
            </div>
            <div class="col-md-1"></div>
        </div>

        <div class="row">

            <div class="col-md-1"></div>
            <div class="col-md-10">
                <ul class="nav nav-tabs tabs-bordered nav-justified" role="tablist">
                    <li class="nav-item tab">
                        <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">
                            <span class="d-block d-sm-none"><i class="fa fa-home"></i></span>
                            <span class="d-none d-sm-block">Your Profile</span>
                        </a>
                    </li>
                    <li class="nav-item tab">
                        <a class="nav-link" id="setting-tab" data-toggle="tab" href="#setting" role="tab" aria-controls="setting" aria-selected="false">
                            <span class="d-block d-sm-none"><i class="fa fa-cog"></i></span>
                            <span class="d-none d-sm-block">Update Your Profile</span>
                        </a>
                    </li>
                </ul>
            </div>
            <div class="col-md-1"></div>
        </div>
        <div class="row">
            <div class="col-md-1"></div>
            <div class="col-lg-10">

                <div class="tab-content profile-tab-content">
                    <div class="tab-pane show active" id="about" role="tabpanel" aria-labelledby="about-tab">

                        <div class="row">

                            <div class="col-lg-6">
                                <!-- Personal-Information -->
                                <div class="card card-default card-fill">
                                    <div class="card-header">
                                        <h3 class="card-title">Personal Information</h3>
                                    </div>
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about-info-p">
                                                    <strong>Full Name</strong>
                                                    <br>
                                                    <p class="text-muted">{{ Auth::user()->name }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about-info-p">
                                                    <strong>Image</strong>
                                                    <br>
                                                    <img src="{{ asset('upload/admin-dp/'.auth::user()->image) }}" width="70px" height="70px" alt="user image">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about-info-p">
                                                    <strong>Phone</strong>
                                                    <br>
                                                    <p class="text-muted">{{ Auth::user()->phone }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about-info-p">
                                                    <strong>Email</strong>
                                                    <br>
                                                    <p class="text-muted">{{ Auth::user()->email }}</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about-info-p">
                                                    <strong>Address</strong>
                                                    <br>
                                                    <p class="text-muted">{{ Auth::user()->address }}</p>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="about-info-p">
                                                    <strong>State</strong>
                                                    <br>
                                                    @if(Auth::user()->state)
                                                        <p class="text-muted">{{ Auth::user()->state->name }}</p>
                                                    @else
                                                        <p>You have not selected a state yet.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="about-info-p">
                                                    <strong>LGA</strong>
                                                    <br>
                                                    @if(Auth::user()->lga)
                                                        <p class="text-muted">{{ Auth::user()->lga->local_name }}</p>
                                                    @else
                                                        <p>You have not selected a LGA yet.</p>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Personal-Information -->

                            </div>

                            <div class="col-lg-6">
                                <!-- Personal-Information -->
                                <div class="card card-default card-fill">
                                    <div class="card-header">
                                        <h3 class="card-title">Biography</h3>
                                    </div>
                                    <div class="card-body">
                                        <p>{{ Auth::user()->bio }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="tab-pane" id="setting" aria-labelledby="setting-tab">

                        <!-- Personal-Information -->
                        <div class="card card-default card-fill">
                            <div class="card-header">
                                <h3 class="card-title">Edit Profile</h3>
                            </div>
                            <div class="card-body">
                                <form action="{{ route('updateprofile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="FullName">Full Name</label>
                                                <input type="text" name="name" value="{{ auth::user()->name }}" id="FullName" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Email">Email</label>
                                                <input type="email" name="email" value="{{ auth::user()->email }}" id="Email" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="Email">Phone</label>
                                                <input type="tel" name="phone" value="{{ auth::user()->phone }}" id="Email" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="RePassword">Address</label>
                                                <input type="text" value="{{ auth::user()->address }}" name="address" id="RePassword" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">State</label>
                                                <select id="statespicker" name="state_id" class="form-control" onchange="pickLga(this.id)" data-toggle="select2" data-placeholder="Choose a Country...">
                                                    <option> Select Your State</option>
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
                                    </div>
                                    <div class="form-group">
                                        <label for="RePassword">Your Image</label>
                                        <img src="{{ asset('upload/admin/'.auth::user()->image) }}" width="50px" height="40px" class="my-2" alt="image">
                                        <input class="form-inline" accept="image/*" type="file" name="image" multiple>
                                    </div>

                                    <div class="form-group">
                                        <label for="AboutMe">About Me</label>
                                        <textarea style="height: 125px" id="AboutMe" name="bio" class="form-control">{{ auth::user()->bio }}</textarea>
                                    </div>
                                    <button class="btn btn-primary waves-effect waves-light w-md" type="submit">Update</button>
                                </form>

                            </div>
                        </div>
                        <!-- Personal-Information -->
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
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
