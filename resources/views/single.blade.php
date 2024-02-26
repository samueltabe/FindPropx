@extends('layouts.frontend')
<style>
    div#social-links {
        margin: 0 auto;
        max-width: 50%;
        display: flex;
        justify-content: center;
    }
    div#social-links ul {
        display: flex;
        list-style: none;
        padding: 0;
    }
    div#social-links ul li {
        margin-right: 10px;
    }
    div#social-links ul li a {
        padding: 5px;
        font-size: 13px;
        color: #fff;
        text-decoration: none;
    }
    div#social-links ul li a:hover {
        color: #e5dddd;
        background-color: #E78C2D;
    }
    .verify {
        color: green;
        padding: 5px;
        border-radius: 5px;
    }
    .unverify {
        color: rgba(212, 14, 14, 0.852);
        padding: 5px;
        border-radius: 5px;
    }
</style>

@section('content')

<!--header -->
<header class="header">
    @include('inc.frontend.navpages')
</header>
<!--header -->
<!--Modal login -->
@include('inc.frontend.modal')
<!--Modal login -->

<!--=================================
Breadcrumb -->
<div class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"> <i class="fas fa-home"></i> </a></li>
            <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a href="{{ url('/list') }}">Pages</a></li>
            <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> {{ $houses->title }}</span></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--=================================
  Breadcrumb -->

  <div class="wrapper">
    <!--=================================
    Property details -->
    <section class="space-pt">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0 order-lg-2">
            <div class="sticky-top">
              <div class="mb-4">
                <h3>{{ $houses->title }}</h3>
                <span class="d-block mb-3"><i class="fas fa-map-marker-alt fa-xs pe-2"></i>{{$houses->city}}, {{$houses->lgas->local_name}}, {{$houses->states->name}}</span>
                @if(isset($houses->sale_price))
                    <span class="price font-xll text-primary d-block"><b class="text-dark">Sale Price: </b>₦{{ $houses->sale_price }}</span>
                @else
                    <span class="price font-xll text-primary d-block"><b class="text-dark">Rent Price: </b>₦{{ $houses->price }}</span>
                @endif
                <span class="sub-price font-lg text-dark d-block"><b>{{ $houses->area }} </b> </span>
                <ul class="property-detail-meta list-unstyled ">
                  {{-- <li><a href="#"> <i class="fas fa-star text-warning pe-2"></i>3.9/5 </a></li> --}}
                  <li class="share-box">
                    <a href="#"> <i class="fas fa-share-alt"></i> </a>
                    <ul class="list-unstyled share-box-social">
                       <li>{!! $shareComponent !!}</li>
                    </ul>
                  </li>
                  <li><a href="#"> <i class="fas fa-heart"></i> </a></li>
                  <li><a href="#"> <i class="fas fa-exchange-alt"></i> </a></li>
                  <li><a href="#"> <i class="fas fa-print"></i> </a></li>
                </ul>
              </div>
              <div>
                @if($houses->users && $houses->users->verified)
                <h6>This Agent is <span class="verify">verified</span></h6>
                @else
                    <h6>This Agent is <span class="unverify">Unverified</span></h6>
                @endif
              </div>
              <div class="agent-contact">
                <div class="d-flex align-items-center p-4 border border-bottom-0">
                  <div class="agent-contact-avatar me-3">
                    @if (optional($houses->users)->image)
                        <img class="img-fluid rounded-circle avatar avatar-xl" src="{{ asset('upload/admin/images/'.$houses->users->image)?? '' }}" alt="">
                    @else
                        <img src="" alt="author-image" class="author__img">
                    @endif
                  </div>
                  <div class="agent-contact-name">
                    <h6>{{ optional($houses->users)->name }}</h6>
                    {{-- <a href="#">Company Agent</a> --}}
                    @php
                        $phoneNumber = preg_replace('/[^0-9]/', '', $houses->users->phone);
                    @endphp
                    <span class="d-block"><i class="fas fa-phone-volume pe-2 mt-2"></i>
                        <a href="tel:{{ $phoneNumber }}">{{ optional($houses->users)->phone }}</a>
                    </span>
                  </div>
                </div>
                <div class="d-flex">
                  <a href="#" class="btn btn-dark col b-radius-none">View listings</a>
                  <a href="mailto:{{ $houses->users->email }}" class="btn btn-primary col ms-0 b-radius-none">Request info</a>
                </div>
              </div>
            </div>
          </div>
          <div class="mb-3">
            @if($houses->users && $houses->users->verified)
            <h6>The Agent that upload this property is <span class="verify">verified</span></h6>
            @else
                <h6>The Agent that upload this property is <span class="unverify">Unverified.</span> Trade with caution!</h6>
            @endif
          </div>
          <div class="col-lg-8 order-lg-1">
            <div class="property-detail-img popup-gallery">
              <div class="owl-carousel" data-animateOut="fadeOut" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0" data-loop="true">
                @foreach($houses->images as $image)
                <div class="item{{ $loop->first ? ' active' : '' }}">
                    <a class="portfolio-img" href="/{{ $image->img_url }}"><img class="img-fluid" src="{{ asset($image->img_url) }}" style="width: 100%; height: 500px;" alt=""></a>
                </div>
                @endforeach
              </div>
            </div>
            <div class="property-info mt-5">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Property details</h5>
                </div>
                <div class="col-sm-9">
                  <div class="row mb-3">
                    <div class="col-sm-6">
                      <ul class="property-list list-unstyled">
                        {{-- <li><b>Property ID:</b> RV151</li> --}}
                        @if(isset($houses->sale_price))
                            <li><b>Sale Price:</b> ₦{{ $houses->sale_price }}</li>
                        @else
                            <li><b>Rented Price:</b> ₦{{ $houses->price }}</li>
                        @endif
                        <li><b>Property Size:</b> {{ $houses->area ?? 'N/A' }} </li>
                        <li><b>Bedrooms:</b> {{ $houses->rooms ?? 'N/A' }}</li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="property-list list-unstyled">
                        {{-- <li><b>Garage:</b> 1</li>
                        <li><b>Garage Size:</b> 458 SqFt</li>
                        <li><b>Year Built:</b> 2019-01-09</li> --}}
                        <li><b>Property Type:</b> {{ $houses->types->name }}</li>
                        <li><b>Property Status:</b> {{ $houses->status->name ?? 'N/A' }}</li>
                      </ul>
                    </div>
                  </div>
                  {{-- <h6 class="text-primary mb-3 mb-sm-0">Additional details</h6>
                  <div class="row">
                    <div class="col-sm-6">
                      <ul class="property-list list-unstyled mb-0">
                        <li><b>Deposit:</b> 30%</li>
                        <li><b>Pool Size:</b> 457 Sqft</li>
                        <li><b>Last remodel year:</b> 1956</li>
                      </ul>
                    </div>
                    <div class="col-sm-6">
                      <ul class="property-list list-unstyled mb-0">
                        <li><b>Amenities:</b> Clubhouse</li>
                        <li><b>Additional Rooms:</b> Guest Bat</li>
                        <li><b>Equipment:</b> Grill - Gas - light</li>
                      </ul>
                    </div>
                  </div> --}}
                </div>
              </div>
            </div>
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-description">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Description</h5>
                </div>
                <div class="col-sm-9">
                    <p>{{ $houses->description }}</p>
                </div>
              </div>
            </div>
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-features">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Features</h5>
                </div>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-sm-4">
                      <ul class="property-list-style-2 list-unstyled mb-0">
                        @foreach ($houseFeature->house_features as $feature)
                           <li>{{ $feature->feature->name }}</li>
                      </ul>
                    </div>
                    <div class="col-sm-4">
                      <ul class="property-list-style-2 list-unstyled mb-0">
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-address">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Address</h5>
                </div>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="col-sm-12">
                      <ul class="property-list list-unstyled mb-0">
                        <li ><b >City:</b>{{$houses->city}}</li>
                        <li><b>LGA:</b>{{$houses->lgas->local_name}}</li>
                        <li><b>State:</b>{{$houses->states->name}}</li>
                        {{-- <li><b>Area:</b> Embarcadero</li> --}}
                      </ul>
                    </div>
                    {{-- <div class="col-sm-6">
                      <ul class="property-list list-unstyled mb-0">
                        <li><b>City:</b> San francisco</li>
                        <li><b>Zip:</b> 4848494</li>
                        <li><b>Country:</b> United States</li>
                      </ul>
                    </div> --}}
                  </div>
                </div>
              </div>
            </div>
            {{--<hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
             <div class="property-floor-plans">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Floor plans</h5>
                </div>
                <div class="col-sm-9">
                  <div class="accordion-style-2" id="accordion">
                    <div class="card">
                      <div class="card-header" id="headingOne">
                        <h5 class="accordion-title mb-0">
                        <button class="btn btn-link d-flex ms-auto align-items-center" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">First Floor <i class="fas fa-chevron-down fa-xs"></i></button>
                        </h5>
                      </div>
                      <div id="collapseOne" class="collapse show accordion-content" aria-labelledby="headingOne" data-bs-parent="#accordion">
                        <div class="card-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate labore amet nulla a nobis iste consequuntur laudantium natus corporis, eveniet quo quidem perferendis sint illo autem, aut incidunt enim libero.</p>
                          <img class="img-fluid" src="images/property/floor-plans-01.jpg" alt="">
                        </div>
                      </div>
                    </div>
                    <div class="card">
                      <div class="card-header" id="headingTwo">
                        <h5 class="accordion-title mb-0">
                        <button class="btn btn-link d-flex ms-auto align-items-center collapsed" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Second Floor <i class="fas fa-chevron-down fa-xs"></i>
                        </button>
                        </h5>
                      </div>
                      <div id="collapseTwo" class="collapse accordion-content" aria-labelledby="headingTwo" data-bs-parent="#accordion">
                        <div class="card-body">
                          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sit rem esse qui voluptatem tempore nobis nihil, ex, odit vel exercitationem aperiam provident consectetur. Ea, eos, blanditiis! Rem quia, doloremque numquam.</p>
                          <img class="img-fluid" src="images/property/floor-plans-01.jpg" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div> --}}
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-video">
                <div class="row">
                  <div class="col-sm-3 mb-3 mb-sm-0">
                    <h5>Property video</h5>
                  </div>
                  <div class="col-sm-9">
                    <div class="embed-responsive embed-responsive-16by9">
                       {{-- <iframe width="560" height="315" src="{{$houses->video ?? 'No Video'}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe> --}}
                       {!! $houses->video ?? 'No Video' !!}
                    </div>
                  </div>
                </div>
              </div>
            {{--<hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
             <div class="property-walk-score">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>WalkScore</h5>
                </div>
                <div class="col-sm-9">
                  <div class="walk-score-info d-sm-flex">
                    <div class="mb-2 mb-sm-0">
                      <img src="images/property/walk-score.png" alt="">
                      <p class="mb-0 d-block mt-2">walkscore96 / Walker's Paradise</p>
                    </div>
                    <a class="btn btn-primary btn-sm ms-auto" href="#">More details here</a>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-nearby">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>What's nearby</h5>
                </div>
                <div class="col-sm-9">
                  <div class="nearby-info mb-4">
                    <span class="nearby-title mb-2 d-block text-info">
                      <i class="fas fa-graduation-cap me-2"></i><b>Education</b>
                    </span>
                    <div class="nearby-list">
                      <ul class="property-list list-unstyled mb-0">
                        <li class="d-flex">
                          <span class="me-1"><b>Case Western Reserve University</b> (2.10 km)</span>
                          <ul class="list-unstyled list-inline ms-auto">
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                          </ul>
                        </li>
                        <li class="d-flex">
                          <span class="me-1"><b>Georgia Institute of Technology</b> (1.42 km)</span>
                          <ul class="list-unstyled list-inline ms-auto">
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                          </ul>
                        </li>
                        <li class="d-flex">
                          <span class="me-1"><b>Harvey Mudd College</b> (1.64 km)</span>
                          <ul class="list-unstyled list-inline ms-auto">
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="nearby-info mb-4">
                    <span class="nearby-title mb-2 d-block text-success">
                      <i class="fas fa-user-md me-2"></i><b>Health & Medical</b>
                    </span>
                    <div class="nearby-list">
                      <ul class="property-list list-unstyled mb-0">
                        <li class="d-flex">
                          <span class="me-1"><b>Hopedale Community Hospital</b> (2.04 km)</span>
                          <ul class="list-unstyled list-inline ms-auto">
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                          </ul>
                        </li>
                        <li class="d-flex">
                          <span class="me-1"><b>North Star Medical Clinic</b> (1.45 km)</span>
                          <ul class="list-unstyled list-inline ms-auto">
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                          </ul>
                        </li>
                        <li class="d-flex">
                          <span class="me-1"><b>Maple Valley General Hospital</b> (2.64 km)</span>
                          <ul class="list-unstyled list-inline ms-auto">
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="nearby-info">
                    <span class="nearby-title mb-2 d-block text-danger">
                      <i class="fas fa-bus-alt me-2"></i><b>Transportation</b>
                    </span>
                    <div class="nearby-list">
                      <ul class="property-list list-unstyled mb-0">
                        <li class="d-flex">
                          <span class="me-1"><b>Central bus depot </b> (2.04 km)</span>
                          <ul class="list-unstyled list-inline ms-auto">
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                          </ul>
                        </li>
                        <li class="d-flex">
                          <span class="me-1"><b>Travello & Bus Charter Express</b> (2.54 km)</span>
                          <ul class="list-unstyled list-inline ms-auto">
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                          </ul>
                        </li>
                        <li class="d-flex">
                          <span class="me-1"><b>Charing Cross & Paddington Shipping</b> (2.64 km)</span>
                          <ul class="list-unstyled list-inline ms-auto">
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                            <li class="list-inline-item m-0 text-warning"><i class="far fa-star fa-xs"></i></li>
                          </ul>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-schedule">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Schedule a tour</h5>
                </div>
                <div class="col-sm-9">
                  <div class="row">
                    <div class="mb-3 col-sm-6 datetimepickers">
                      <div class="input-group date" id="datetimepicker-01" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" placeholder="Date" data-target="#datetimepicker-01">
                        <div class="input-group input-group-box" data-target="#datetimepicker-01" data-toggle="datetimepicker">
                          <div class="input-group-text rounded-0 rounded-end"><i class="far fa-calendar-alt"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 col-sm-6 datetimepickers">
                      <div class="input-group date" id="datetimepicker-03" data-target-input="nearest">
                        <input type="text" class="form-control datetimepicker-input" placeholder="Time" data-target="#datetimepicker-03"/>
                        <div class="input-group input-group-box" data-target="#datetimepicker-03" data-toggle="datetimepicker">
                          <div class="input-group-text rounded-0 rounded-end"><i class="far fa-clock"></i></div>
                        </div>
                      </div>
                    </div>
                    <div class="mb-3 col-sm-12">
                      <input type="text" class="form-control" placeholder="Name">
                    </div>
                    <div class="mb-3 col-sm-12">
                      <input type="email" class="form-control" placeholder="Email">
                    </div>
                    <div class="mb-3 col-sm-12">
                      <input type="Text" class="form-control" placeholder="Phone">
                    </div>
                    <div class="mb-3 col-sm-12">
                      <textarea class="form-control" rows="4" placeholder="Message"></textarea>
                    </div>
                    <div class="mb-3 col-sm-12">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                    <div class="col-sm-6"></div>
                  </div>
                </div>
              </div>
            </div> --}}
            {{-- <hr class="mt-4 mb-4 mb-sm-5 mt-sm-5">
            <div class="property-statistics">
              <div class="row">
                <div class="col-sm-3 mb-3 mb-sm-0">
                  <h5>Page views statistics</h5>
                </div>
                <div class="col-sm-9">
                  <img class="img-fluid" src="images/property/views--statistics.jpg" alt="">
                </div>
              </div>
            </div> --}}
          </div>
        </div>
      </div>
    </section>
    <section class="space-pt">
    <div class="container">
      <hr class="mb-5 mt-0">
      <h5 class="mb-4">Similar properties</h5>
      <div class="row">
        @foreach ($type as $ty)
        <div class="col-md-4">
          <div class="property-item">
            <div class="property-image bg-overlay-gradient-04">
              <img class="img-fluid" src="/{{ $ty->images[0]->img_url?? 'no image' }}" style="height: 300px; width: 500px" alt="">
              <div class="property-lable">
                {{-- <span class="badge badge-md bg-primary">Bungalow</span>
                <span class="badge badge-md bg-info">Sal </span> --}}
                <span class="badge badge-md bg-primary">{{ $ty->types->name ?? '' }}</span>
                <span class="badge badge-md bg-info">{{ $ty->status->name ?? '' }} </span>
              </div>
              <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
              <div class="property-agent">
                <div class="property-agent-image">
                  <img class="img-fluid" src="{{ asset('upload/admin/images/'.$ty->users->image)?? '' }}" alt="">
                </div>
                <div class="property-agent-info">
                  <a class="property-agent-name" href="{{ url('single/'.$ty->id) }}">{{ $ty->users->name }}</a>
                  {{-- <span class="d-block">Company Agent</span> --}}
                  <ul class="property-agent-contact list-unstyled">
                    @php
                        $phoneNumber = preg_replace('/[^0-9]/', '', $ty->users->phone);
                    @endphp
                    <li><a href="tel:{{ $phoneNumber }}"><i class="fas fa-mobile-alt"></i> </a></li>
                    <li><a href="mailto:{{ $ty->users->email }}"><i class="fas fa-envelope"></i> </a></li>
                  </ul>
                </div>
              </div>
              <div class="property-agent-popup">
                {{-- <a href="#"><i class="fas fa-camera"></i> 06</a> --}}
              </div>
            </div>
            <div class="property-details">
              <div class="property-details-inner">
                <h5 class="property-title"><a href="{{ url('single/'.$ty->id) }}">{{ $ty->title }} </a></h5>
                <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>{{ $ty->lgas->local_name }}, {{ $ty->states->name }}</span>
                <span class="property-agent-date"><i class="far fa-clock fa-md"></i>{{ $ty->created_at->diffForHumans() }}</span>
                {{-- <div class="property-price">₦{{ $ty->price }}<span> / month</span> </div> --}}
                @if(isset($houses->sale_price))
                  <div class="property-price">₦{{ $ty->sale_price }}<span> / month</span> </div>
                @else
                  <div class="property-price">₦{{ $ty->price }}<span> / month</span> </div>
                @endif

                {{-- <ul class="property-info list-unstyled d-flex">
                  <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>1</span></li>
                  <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                  <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>145m</span></li>
                </ul> --}}
              </div>
              <div class="property-btn">
                <a class="property-link" href="{{ url('single/'.$ty->id) }}">See Details</a>
                <ul class="property-listing-actions list-unstyled mb-0">
                  <li class="property-compare"><a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                  <li class="property-favourites"><a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        @endforeach
      </div>
    </div>
  </section>
    <!--=================================
    Property details -->

  <!--=================================
  Review -->
  {{-- <section class="space-pb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h4>Leave a review for joana williams</h4>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="review d-flex">
            <div class="review-avatar avatar avatar-xl me-3">
              <img class="img-fluid rounded-circle" src="images/avatar/01.jpg" alt="">
            </div>
            <div class="review-info flex-grow-1">
              <span class="mb-2 d-block">Rating:</span>
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item m-0 text-warning"><i class="fas fa-star"></i></li>
                <li class="list-inline-item m-0 text-warning"><i class="fas fa-star"></i></li>
                <li class="list-inline-item m-0 text-warning"><i class="fas fa-star"></i></li>
                <li class="list-inline-item m-0 text-warning"><i class="fas fa-star-half-alt"></i></li>
                <li class="list-inline-item m-0 text-warning"><i class="far fa-star"></i></li>
              </ul>
              <div class="mb-3">
                <span class="mb-2 d-block">Rating comment:</span>
                <div class="mb-3">
                  <textarea class="form-control" rows="3"></textarea>
                </div>
              </div>
              <span> <a href="login.html"> <b>Login</b>  </a> to leave a review</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!--=================================
  Review -->
  </div>
@endsection

