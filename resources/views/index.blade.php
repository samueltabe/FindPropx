@extends('layouts.frontend')

@section('content')
<!--header -->
<header class="header header-transparent">
    @include('inc.frontend.navsection')
</header>
  <!--header ends -->
   <!--Modal login -->
   @include('inc.frontend.modal')
  <!--Modal login -->

  <!--banner -->
  <section class="position-relative">
    <div class="banner bg-holder bg-overlay-gradient-02" style="background-image: url(frontend/asset/images/banner-02.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-xl-6 position-relative">
            <h1 class="text-white mb-4 display-4 fw-bold">Find the perfect home to buy or rent</h1>
          </div>
        </div>
      </div>
    </div>
    <svg class="banner-shap"
      xmlns="http://www.w3.org/2000/svg"
      xmlns:xlink="http://www.w3.org/1999/xlink"
      width="100%" height="100px">
      <path fill-rule="evenodd"  fill="rgb(255, 255, 255)"
        d="M1920.000,100.000 L0.000,100.000 L1920.000,-0.000 L1920.000,100.000 Z"/>
      </svg>
    </section>
    <!--=================================
    banner -->

  <!--property Type -->
  <section class="property-search-field-top position-reletive">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="property-search-field bg-white">
            <div class="property-search-item">
              <form class="row basic-select-wrapper">
                <div class="form-group col-lg-2 col-md-6">
                  <label class="form-label">Property type</label>
                  <select class="form-control basic-select" id="typeFilt">
                    <option>All Types</option>
                    @foreach ($type as $ty)
                        <option value="{{ $ty->id }}">{{ $ty->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group col-lg-2 col-md-6">
                  <label class="form-label">Status</label>
                  <select class="form-control basic-select" id="typeFiltre">
                    <option>All Status</option>
                    @foreach ($status as $ty)
                        <option value="{{ $ty->id }}">{{ $ty->name }}</option>
                    @endforeach
                  </select>
                </div>
                <div class="form-group d-flex col-lg-6">
                  <div class="form-group-search">
                    <label class="form-label">Location</label>
                    <div class="d-flex align-items-center"><i class="far fa-compass me-1"></i><input class="form-control" type="search" placeholder="Search Location"></div>
                  </div>
                  <span class="align-items-center ms-3 d-none d-md-block"><button class="btn btn-primary d-flex align-items-center" type="submit"><i class="fas fa-search me-1"></i><span>Search</span></button></span>
                </div>
                <div class="form-group text-center col-lg-2 col-md-4 ">
                  <div class="d-flex justify-content-center d-md-inline-block">
                    <a class="more-search p-0" data-bs-toggle="collapse" href="#advanced-search" role="button" aria-expanded="false" aria-controls="advanced-search"> <span class="d-block pe-2 mb-1">Advanced search</span>
                    <i class="fas fa-angle-double-down"></i></a>
                  </div>
                </div>
                <div class="collapse advanced-search p-0" id="advanced-search">
                  <div class="card card-body">
                    <div class="row">
                      <div class="form-group col-md-3">
                        <label class="form-label">Distance from location</label>
                        <select class="form-control basic-select">
                          <option>This area only</option>
                          <option>Within 1 mile</option>
                          <option>Within 3 miles</option>
                          <option>Within 5 miles</option>
                          <option>Within 10 miles</option>
                          <option>Within 15 miles</option>
                          <option>Within 30 miles</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label class="form-label">Bedrooms</label>
                        <select class="form-control basic-select">
                          <option>No max</option>
                          <option>01</option>
                          <option>02</option>
                          <option>03</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label class="form-label">Sort by</label>
                        <select class="form-control basic-select">
                          <option>Most popular</option>
                          <option>Highest price</option>
                          <option>Lowest price</option>
                          <option>Most reduced</option>
                        </select>
                      </div>
                      <div class="form-group col-md-3">
                        <label class="form-label">Floor</label>
                        <select class="form-control basic-select">
                          <option>Select Floor</option>
                          <option>01</option>
                          <option>02</option>
                          <option>03</option>
                        </select>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-3">
                        <label class="form-label">Min Area (sq ft)</label>
                        <input class="form-control" placeholder="Type (sq ft)">
                      </div>
                      <div class="form-group col-md-3">
                        <label class="form-label">Max Area (sq ft)</label>
                        <input class="form-control" placeholder="Type (sq ft)">
                      </div>
                      <div class="form-group col-md-6 property-price-slider ">
                        <label class="form-label">Select Price Range</label>
                        <input type="text" id="property-price-slider" name="example_name" value="" />
                      </div>
                    </div>
                  </div>
                </div>
                <div class="d-md-none d-grid btn-mobile  m-3">
                  <button class="btn btn-primary d-grid align-items-center" type="submit"><i class="fas fa-search me-1"></i><span>Search</span></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Property Types -->

  <!--location -->
  {{-- <section class="space-ptb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2>Find properties in these cities</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <div class="row">
            <div class="col-md-6 mb-4 mb-lg-0">
              <a href="property-grid.html">
                <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url(images/location/01.jpg);">
                  <div class="location-item-info">
                    <h5 class="location-item-title">Mumbai</h5>
                    <span class="location-item-list">10 Properties</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-md-6 mb-4 mb-md-0">
              <a href="property-grid.html">
                <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url(images/location/02.jpg);">
                  <div class="location-item-info">
                    <h5 class="location-item-title">Los angeles</h5>
                    <span class="location-item-list">14 Properties</span>
                  </div>
                </div>
              </a>
            </div>
            <div class="col-lg-12 mt-0 mt-lg-4">
              <a href="property-grid.html">
                <div class="location-item bg-overlay-gradient bg-holder" style="background-image: url(images/location/04.jpg);">
                  <div class="location-item-info">
                    <h5 class="location-item-title">Miami</h5>
                    <span class="location-item-list">22 Properties</span>
                  </div>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <a href="property-grid.html">
            <div class="location-item location-item-big bg-overlay-gradient bg-holder" style="background-image: url(images/location/03.jpg);">
              <div class="location-item-info">
                <h5 class="location-item-title">San francisco </h5>
                <span class="location-item-list">29 Properties</span>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section> --}}
  <!--location -->

<!--=================================
Featured properties-->
<section class="space-ptb">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8">
          <div class="section-title text-center">
            <h2>Hot & Latest Properties</h2>
            <p>You are one click away</p>
          </div>
        </div>
      </div>
      <div class="row">
        @foreach ($houses as $house)
        <div class="col-md-4">
          <div class="property-item">
            <div class="property-image bg-overlay-gradient-04">
              <img class="img-fluid" src="/{{ $house->images[0]->img_url?? 'no image' }}" style="height: 300px" alt="">
              <div class="property-lable">
                <span class="badge badge-md bg-primary">{{ $house->types->name ?? '' }}</span>
                <span class="badge badge-md bg-info">{{ $house->status->name ?? '' }} </span>
              </div>
              <span class="property-trending" title="trending"><i class="fas fa-bolt"></i></span>
              <div class="property-agent">
                <div class="property-agent-image">
                  <img class="img-fluid" src="{{ asset('upload/admin-dp/'.$house->users->image)?? '' }}" alt="">
                </div>
                <div class="property-agent-info">
                  <a class="property-agent-name" href="#">{{$house->users->name}}</a>
                  <ul class="property-agent-contact list-unstyled">
                    @php
                        $phoneNumber = preg_replace('/[^0-9]/', '', $house->users->phone);
                    @endphp
                    <li><a href="tel:{{ $phoneNumber }}"><i class="fas fa-mobile-alt"></i> </a></li>
                    <li><a href="mailto:{{ $house->users->email }}"><i class="fas fa-envelope"></i> </a></li>
                  </ul>
                </div>
              </div>
              <div class="property-agent-popup">
                <a href="#"><i class="fas fa-camera"></i> 06</a>
              </div>
            </div>
            <div class="property-details">
              <div class="property-details-inner">
                <h5 class="property-title"><a href="{{ url('single/'.$house->id) }}">{{ $house->title }} </a></h5>
                <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>{{ $house->lgas->local_name }},&nbsp{{  $house->states->name }}</span>
                <span class="property-agent-date"><i class="far fa-clock fa-md"></i>{{$house->created_at->diffForHumans()}}</span>
                <div class="property-price">₦{{ $house->price }}<span> / month</span> </div>
                <ul class="property-info list-unstyled d-flex">
                  <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Rooms<span>{{ $house->rooms }}</span></li>
                  <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                  <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>{{ $house->area }}</span></li>
                </ul>
              </div>
              <div class="property-btn">
                <a class="property-link" href="{{ url('single/'.$house->id) }}">See Details</a>
                <ul class="property-listing-actions list-unstyled mb-0">
                  <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                  <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        @endforeach
        <div class="col-12 text-center">
          <a class="btn btn-link" href="{{ url('/list') }}"><i class="fas fa-plus"></i>View All Listings</a>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Featured properties-->

  <!--about-->
  <section class="space-ptb bg-holder bg-overlay-black-70" style="background-image: url(images/bg/01.jpg);">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-8 text-center position-relative">
          <div class="section-title">
            <span class="text-primary fw-bold d-block mb-3">Buy or sell</span>
            <p class="text-white">Whether you're looking to buy, sell, or rent a property, or seeking an excellent land investment opportunity, Findpropx is here to transform your property search experience. Join us today and unlock the door to your dream property!</p>
          </div>
          <a data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-primary mb-2 mb-sm-0" href="#">Submit Property</a>
          <a class="btn btn-white mb-2 mb-sm-0" href="{{ url('/list') }}">Browse Properties</a>
        </div>
      </div>
    </div>
  </section>
  <!--about-->

  <!--offering the best-->
  <section class="space-ptb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title">
            <h2>We are offering the best deal this week</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="owl-carousel owl-nav-top-left" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
            @foreach ($houses as $house)
            <div class="item">
              <div class="property-item property-col-list mb-0 text-center">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="property-image bg-overlay-gradient-04">
                      <img class="img-fluid" src="/{{ $house->images[0]->img_url?? 'no image' }}" style="height: 500px" alt="">
                      <div class="property-lable">
                        <span class="badge badge-md bg-primary">Studio</span>
                        <span class="badge badge-md bg-info">New </span>
                      </div>
                      <div class="property-agent">
                        <div class="property-agent-image">
                          <img class="img-fluid" src="images/avatar/06.jpg" alt="">
                        </div>
                        <div class="property-agent-info">
                          <a class="property-agent-name" href="#">Michael Bean</a>
                          <span class="d-block">Research</span>
                          <ul class="property-agent-contact list-unstyled">
                            <li><a href="#"><i class="fas fa-mobile-alt"></i> </a></li>
                            <li><a href="#"><i class="fas fa-envelope"></i> </a></li>
                          </ul>
                        </div>
                      </div>
                      <div class="property-agent-popup">
                        <a href="#"><i class="fas fa-camera"></i> 02</a>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="property-details pt-4">
                      <div class="property-details-inner">
                        <h5 class="property-title"><a href="property-detail-style-01.html">184 lexington avenue</a></h5>
                        <span class="property-address"><i class="fas fa-map-marker-alt fa-xs"></i>Hamilton rd. willoughby, oh</span>
                        <span class="property-agent-date"><i class="far fa-clock fa-md"></i>3 years ago</span>
                        <p class="mb-0 mt-3">The first thing to remember about success is that it is a process – nothing more, nothing less. There is really no magic to it.</p>
                        <div class="property-price">$236.00<span> / month</span> </div>
                        <ul class="property-info list-unstyled d-flex">
                          <li class="flex-fill property-bed"><i class="fas fa-bed"></i>Bed<span>2</span></li>
                          <li class="flex-fill property-bath"><i class="fas fa-bath"></i>Bath<span>2</span></li>
                          <li class="flex-fill property-m-sqft"><i class="far fa-square"></i>sqft<span>3,657m</span></li>
                        </ul>
                        <div class="property-countdown mt-4 mb-3 mb-lg-0">
                          <h5 class="mb-3">Deal ends in: </h5>
                          <div class="countdown countdown-small">
                            <span class="theme-color days">00</span>
                            <p class="days_ref">days</p>
                          </div>
                          <div class="countdown countdown-small">
                            <span class="theme-color hours">00</span>
                            <p class="hours_ref">hours</p>
                          </div>
                          <div class="countdown countdown-small">
                            <span class="theme-color minutes">00</span>
                            <p class="minutes_ref">minutes</p>
                          </div>
                          <div class="countdown countdown-small">
                            <span class="theme-color seconds">00</span>
                            <p class="seconds_ref">seconds</p>
                          </div>
                        </div>
                      </div>
                      <div class="property-btn">
                        <a class="property-link" href="property-detail-style-01.html">See Details</a>
                        <ul class="property-listing-actions list-unstyled mb-0">
                          <li class="property-compare"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                          <li class="property-favourites"><a data-bs-toggle="tooltip" data-bs-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--offering the best -->

  <!--Browse properties by location -->
  {{-- <section class="space-ptb bg-light">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="section-title">
            <h2>Browse properties by location</h2>
          </div>
        </div>
        <div class="col-lg-4 text-lg-end mt-lg-2 mb-lg-0 mb-3">
          <a class="btn btn-link p-0 mt-1" href="#"> Show All Properties</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="location-list">
            <div class="row align-items-center">
              <div class="col-lg-4 col-sm-6  border-end">
                <ul class="list-unstyled mb-0">
                  <li><a href="property-list.html">Australia <span class="ms-auto">02</span> </a></li>
                  <li><a href="property-list.html">Belgium <span class="ms-auto">02</span> </a></li>
                  <li><a href="property-list.html">Brazil <span class="ms-auto">02</span> </a></li>
                  <li><a href="property-list.html">Central African Republic <span class="ms-auto">02</span> </a></li>
                  <li><a href="property-list.html">Cook/ Chef <span class="ms-auto">02</span> </a></li>
                  <li><a href="property-list.html">Dominica <span class="ms-auto">02</span> </a></li>
                  <li><a href="property-list.html">Egypt <span class="ms-auto">02</span> </a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-sm-6">
                <ul class="list-unstyled mb-0">
                  <li><a href="property-list.html">France <span class="ms-auto">02</span> </a></li>
                  <li><a href="property-list.html">Greece <span class="ms-auto">02</span> </a></li>
                  <li><a href="property-list.html">Hawaii* <span class="ms-auto">02</span> </a></li>
                  <li><a href="property-list.html">India <span class="ms-auto">02</span> </a></li>
                  <li><a href="property-list.html">Italy <span class="ms-auto">02</span> </a></li>
                  <li><a href="property-list.html">Jordan <span class="ms-auto">02</span> </a></li>
                  <li><a href="property-list.html">Kazakhstan <span class="ms-auto">02</span> </a></li>
                </ul>
              </div>
              <div class="col-lg-4">
                <div class="bg-holder py-sm-5" style="background-image: url(images/google-map.png);">
                  <div class="d-flex align-items-center justify-content-center">
                    <div class="counter">
                      <span class="timer text-primary" data-to="1500" data-speed="10000">1500</span>
                    </div>
                    <div class="ms-3 mt-2">
                      <span>Wide range of</span>
                      <h5>Property</h5>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!--Browse properties by location -->

  <!--agent -->
  {{-- <section class="space-ptb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2>Meet our agents</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6 mb-4">
          <div class="agent agent-02">
            <div class="agent-detail">
              <div class="agent-avatar avatar avatar-xlll">
                <img class="img-fluid rounded-circle" src="images/agent/01.jpg" alt="">
              </div>
              <div class="agent-info">
                <h5 class="mb-0"> <a href="agent-detail.html">John doe</a></h5>
                <span class="text-primary">Land development</span>
                <p class="mt-3 mb-0">If success is a process with a number of defined steps, then it is just like any other process. </p>
              </div>
            </div>
            <div class="agent-button">
              <a class="btn btn-light d-grid" href="agent-detail.html">View Profile</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4">
          <div class="agent agent-02">
            <div class="agent-detail">
              <div class="agent-avatar avatar avatar-xlll">
                <img class="img-fluid rounded-circle" src="images/agent/02.jpg" alt="">
              </div>
              <div class="agent-info">
                <h5 class="mb-0"> <a href="agent-detail.html">Felica queen</a></h5>
                <span class="text-primary">Construction</span>
                <p class="mt-3 mb-0">Making a decision to do something – this is the first step. We all know that nothing moves until someone.</p>
              </div>
            </div>
            <div class="agent-button">
              <a class="btn btn-light d-grid" href="agent-detail.html">View Profile</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 mb-4 mb-md-0">
          <div class="agent agent-02">
            <div class="agent-detail">
              <div class="agent-avatar avatar avatar-xlll">
                <img class="img-fluid rounded-circle" src="images/agent/03.jpg" alt="">
              </div>
              <div class="agent-info">
                <h5 class="mb-0"> <a href="agent-detail.html">Joana williams</a></h5>
                <span class="text-primary">Founder & CEO</span>
                <p class="mt-3 mb-0">So, make the decision to move forward. Commit your decision to paper, just to bring it into focus.</p>
              </div>
            </div>
            <div class="agent-button">
              <a class="btn btn-light d-grid" href="agent-detail.html">View Profile</a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="agent agent-02">
            <div class="agent-detail">
              <div class="agent-avatar avatar avatar-xlll">
                <img class="img-fluid rounded-circle" src="images/agent/04.jpg" alt="">
              </div>
              <div class="agent-info">
                <h5 class="mb-0"> <a href="agent-detail.html">Paul flavius</a></h5>
                <span class="text-primary">Company Agent</span>
                <p class="mt-3 mb-0">You will sail along until you collide with an immovable object, after which you will sink.</p>
              </div>
            </div>
            <div class="agent-button">
              <a class="btn btn-light d-grid" href="agent-detail.html">View Profile</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!--=================================
  agent -->

  <!--Feature -->
  <section class="space-ptb bg-light">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-lg-6">
          <div class="section-title">
            <h2>Plenty of reasons to choose us</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="popup-video mb-4 text-lg-end">
            <a class="popup-icon popup-youtube d-flex justify-content-lg-end" href="https://www.youtube.com/watch?v=LgvseYYhqU0"> <span class="pe-3"> Play Video</span> <i class="flaticon-play-button"></i> </a>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="feature-info feature-info-02">
            <div class="feature-info-detail">
              <div class="feature-info-icon">
                <i class="flaticon-like"></i>

              </div>
              <div class="feature-info-content">
                <h6 class="mb-3 feature-info-title">User-Friendly Interface</h6>
                <p>Our website is designed with simplicity in mind, making it easy for anyone to navigate and find their desired property.</p>
              </div>
              <div class="feature-info-button">
                <a class="btn btn-light d-grid" href="{{ url('/about') }}">Read more</a>
              </div>
            </div>
            <div class="feature-info-bg bg-holder bg-overlay-black-70" style="background-image: url('images/property/grid/01.jpg');"></div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="feature-info feature-info-02">
            <div class="feature-info-detail">
              <div class="feature-info-icon">
                <i class="flaticon-database"></i>
              </div>
              <div class="feature-info-content">
                <h6 class="mb-3 feature-info-title">Extensive Database</h6>
                <p>We curate a diverse range of properties and lands, ensuring that you have plenty of options to choose from.</p>
              </div>
              <div class="feature-info-button">
                <a class="btn btn-light d-grid" href="{{ url('/about') }}">Read more</a>
              </div>
            </div>
            <div class="feature-info-bg bg-holder bg-overlay-black-70" style="background-image: url('images/property/grid/02.jpg');"></div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
          <div class="feature-info feature-info-02">
            <div class="feature-info-detail">
              <div class="feature-info-icon">
                <i class="flaticon-shopping-cart"></i>
              </div>
              <div class="feature-info-content">
                <h6 class="mb-3 feature-info-title">Secure Transactions</h6>
                <p>Your security is our priority. Findpropx employs advanced encryption and security measures to protect your personal and financial information.</p>
              </div>
              <div class="feature-info-button">
                <a class="btn btn-light d-grid" href="{{ url('/about') }}">Read more</a>
              </div>
            </div>
            <div class="feature-info-bg bg-holder bg-overlay-black-70" style="background-image: url('images/property/grid/03.jpg');"></div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="feature-info feature-info-02">
            <div class="feature-info-detail">
              <div class="feature-info-icon">
                <i class="flaticon-house-1"></i>
              </div>
              <div class="feature-info-content">
                <h6 class="mb-3 feature-info-title">Efficient Support</h6>
                <p>: Our dedicated customer support team is always ready to assist you with any inquiries or concerns you may have.</p>
              </div>
              <div class="feature-info-button">
                <a class="btn btn-light d-grid" href="{{ url('/about') }}">Read more</a>
              </div>
            </div>
            <div class="feature-info-bg bg-holder bg-overlay-black-70" style="background-image: url('images/property/grid/04.jpg');"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Feature -->

  <!--News, tips & articles -->
  {{-- <section class="space-ptb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2>News, tips & articles</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-4">
          <div class="blog-post">
            <div class="blog-post-image">
              <img class="img-fluid" src="images/blog/01.jpg" alt="">
            </div>
            <div class="blog-post-content">
              <div class="blog-post-details">
                <div class="blog-post-category">
                  <a class="mb-3" href="#"><strong>Home improvement</strong></a>
                </div>
                <div class="blog-post-title">
                  <h5><a href="blog-detail.html">7 pieces of advice to newbies</a></h5>
                </div>
                <div class="blog-post-description">
                  <p class="mb-0">You are going on a cruise, but when the ship sets sail, you discover.</p>
                </div>
              </div>
              <div class="blog-post-footer">
                <div class="blog-post-time">
                  <a href="#"> <i class="far fa-clock"></i>02 Jan 2019</a>
                </div>
                <div class="blog-post-author">
                  <span> By <a href="#"> <img class="img-fluid" src="images/avatar/01.jpg" alt="">Sara lisbon </a> </span>
                </div>
                <div class="blog-post-comment">
                  <a href="#"> <i class="far fa-comment"></i>(12) </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="blog-post">
            <div class="blog-post-image">
              <img class="img-fluid" src="images/blog/02.jpg" alt="">
            </div>
            <div class="blog-post-content">
              <div class="blog-post-details">
                <div class="blog-post-category">
                  <a class="mb-3" href="#"><strong>Tips and advice</strong></a>
                </div>
                <div class="blog-post-title">
                  <h5><a href="blog-detail.html">Where to Invest in Real Estate</a></h5>
                </div>
                <div class="blog-post-description">
                  <p class="mb-0">You will sail along until you collide with an immovable object.</p>
                </div>
              </div>
              <div class="blog-post-footer">
                <div class="blog-post-time">
                  <a href="#"> <i class="far fa-clock"></i>14 Feb 2019</a>
                </div>
                <div class="blog-post-author">
                  <span> By <a href="#"> <img class="img-fluid" src="images/avatar/02.jpg" alt="">Anne Smith</a> </span>
                </div>
                <div class="blog-post-comment">
                  <a href="#"> <i class="far fa-comment"></i>(32) </a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 mt-4 mt-lg-0">
          <div class="blog-post">
            <div class="blog-post-image">
              <img class="img-fluid" src="images/blog/03.jpg" alt="">
            </div>
            <div class="blog-post-content">
              <div class="blog-post-details">
                <div class="blog-post-category">
                  <a class="mb-3" href="#"><strong>Market trends</strong></a>
                </div>
                <div class="blog-post-title">
                  <h5><a href="blog-detail.html">Cutting your losses in Real Estate</a></h5>
                </div>
                <div class="blog-post-description">
                  <p class="mb-0">Trying to go through life without clarity is similar to sailing.</p>
                </div>
              </div>
              <div class="blog-post-footer">
                <div class="blog-post-time">
                  <a href="#"> <i class="far fa-clock"></i>30 March 2019</a>
                </div>
                <div class="blog-post-author">
                  <span> By <a href="#"> <img class="img-fluid" src="images/avatar/03.jpg" alt="">Alice Williams</a> </span>
                </div>
                <div class="blog-post-comment">
                  <a href="#"> <i class="far fa-comment"></i>(45) </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!--News, tips & articles -->

  <!--testimonial -->
  {{-- <section class="space-pb">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="section-title">
            <h2>Testimonials</h2>
          </div>
          <div class="owl-carousel owl-nav-top-left" data-nav-arrow="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
            <div class="item">
              <div class="testimonial-02">
                <div class="testimonial-content">
                  <p><i class="fas fa-quote-right quotes"></i>Oliver always had a smile and was so quick to answer and get the job done.  I'll definitely suggest you to anyone we know who is selling or wanting to purchase a home. He is the best!</p>
                </div>
                <div class="testimonial-author">
                  <div class="testimonial-avatar avatar avatar-lg me-3">
                    <img class="img-fluid rounded-circle" src="images/avatar/01.jpg" alt="">
                  </div>
                  <div class="testimonial-name">
                    <h6 class="text-primary mb-1">Michael Bean</h6>
                    <span>Hamilton Rd. Willoughby</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial-02">
                <div class="testimonial-content">
                  <p><i class="fas fa-quote-right quotes"></i>Jennifer & Dave were both instructive and very valuable in making my decision. I would Surly recommend them to anyone looking for a hassle free and efficient real estate experience.</p>
                </div>
                <div class="testimonial-author">
                  <div class="testimonial-avatar avatar avatar-lg me-3">
                    <img class="img-fluid rounded-circle" src="images/avatar/02.jpg" alt="">
                  </div>
                  <div class="testimonial-name">
                    <h6 class="text-primary mb-1">Isabelle</h6>
                    <span>West Division Street</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6 mt-5 mt-md-0">
          <div class="section-title">
            <h2>Frequently asked questions</h2>
          </div>
          <div class="accordion" id="accordion">
            <div class="accordion-item border-0">
              <div class="accordion-title" id="accordion-title-one">
                <a href="#" data-bs-toggle="collapse" data-bs-target="#accordion-one" aria-expanded="true" aria-controls="accordion-one">01. Who pays the Realtor fees when buying a home?</a>
              </div>
              <div id="accordion-one" class="collapse show" aria-labelledby="accordion-title-one" data-bs-parent="#accordion">
                <div class="accordion-content">Without clarity, you send a very garbled message out to the Universe. We know that the Law of Attraction says that we will attract what we focus on, so if we don’t have clarity, we will attract confusion.</div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <div class="accordion-title" id="accordion-title-tow">
                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-two" aria-expanded="false" aria-controls="accordion-two">02. How is the neighborhood/area?</a>
              </div>
              <div id="accordion-two" class="collapse" aria-labelledby="accordion-title-tow" data-bs-parent="#accordion">
                <div class="accordion-content">The sad thing is the majority of people have no clue about what they truly want. They have no clarity. When asked the question, responses will be superficial at best, and at worst, will be what someone .</div>
              </div>
            </div>
            <div class="accordion-item border-0">
              <div class="accordion-title" id="accordion-title-three">
                <a href="#" class="collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-three" aria-expanded="false" aria-controls="accordion-three">03. What are the average utility bills?</a>
              </div>
              <div id="accordion-three" class="collapse" aria-labelledby="accordion-title-three" data-bs-parent="#accordion">
                <div class="accordion-content">So how do we get clarity? Simply by asking ourselves lots of questions: What do I really want? What does success look like to me? Why do I want a particular thing? How will this achievement change.</div>
              </div>
            </div>
          </div>
          <div class="mt-4">
            <div class="d-flex align-items-center">
              <span class="d-block me-3 text-dark"><b>Call us</b></span>
              <i class="fas fa-phone bg-primary p-3 rounded-circle text-white fa-flip-horizontal"></i>
              <h6 class="ps-3 mb-0 text-primary">(123) 345-6789</h6>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!--testimonial -->

  <!--newsletter -->
  {{-- <section class="py-5 bg-primary">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <h3 class="text-white mb-0">Sign up to our newsletter to get the latest news and offers.</h3>
        </div>
        <div class="col-md-7 mt-3 mt-md-0">
          <div class="newsletter">
            <form>
              <div class="form-group mb-0">
                <input type="email" class="form-control" placeholder="Enter email">
              </div>
              <button type="submit" class="btn btn-dark b-radius-left-none">Get notified</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!--newsletter -->

@endsection
