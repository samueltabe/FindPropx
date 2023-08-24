@extends('layouts.frontend')
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
breadcrumb -->
<div class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"> <i class="fas fa-home"></i> </a></li>
            {{-- <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a href="#">Pages</a></li> --}}
            <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span>Services </span></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--=================================
  breadcrumb -->

<!--=================================
Service -->
<section class="space-ptb">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-title mb-3">
            <h2>Services we offer</h2>
            <span class="lead">We truly care about our users and our product. We are dedicated to providing you with the best experience possible.</span>
          </div>
          <p>At Findpropx, we are passionate about simplifying the property buying, selling, and renting process. Our platform offers a user-friendly and intuitive interface, allowing you to easily navigate through a vast array of property listings. Whether you're a first-time homebuyer, a seasoned investor, or a property owner looking to market your assets, Findpropx has got you covered.</p>
          <div class="row">
            <div class="col-sm-6">
              <ul class="ps-3 mb-2">
                <li class="mb-1">Browse all homes</li>
                <li class="mb-1">Albuquerque real estate</li>
                <li class="mb-1">Atlanta real estate</li>
                <li class="mb-1">Austin real estate</li>
              </ul>
            </div>
            <div class="col-sm-6">
              <ul class="ps-3 mb-2">
                <li class="mb-1">Rental Buildings</li>
                <li class="mb-1">Atlanta apartments for rent</li>
                <li class="mb-1">Austin apartments for rent</li>
                <li class="mb-1">Baltimore apartments for rent</li>
              </ul>
            </div>
          </div>
          <div class="p-4 bg-dark mt-4">
            <div class="row">
              <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="counter counter-02">
                  <div class="counter-content">
                    <span class="timer mb-1 text-white" data-to="2457" data-speed="10000">2457</span>
                    <label class="mb-0 text-white">Property locations</label>
                  </div>
                </div>
              </div>
              <div class="col-sm-4 mb-3 mb-sm-0">
                <div class="counter counter-02">
                  <div class="counter-content">
                    <span class="timer mb-1 text-white" data-to="1284" data-speed="10000">1284</span>
                    <label class="mb-0 text-white">Property rent</label>
                  </div>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="counter counter-02">
                  <div class="counter-content">
                    <span class="timer mb-1 text-white" data-to="2354" data-speed="10000">2354</span>
                    <label class="mb-0 text-white">Property sell</label>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 mt-4 mt-lg-0">
          <img class="img-fluid w-100" src="{{ asset('frontend/asset/images/property/medium-img-01.jpg') }}" alt="">
        </div>
      </div>
      <div class="row mt-0 mt-lg-5">
        <div class="col-lg-4 col-sm-6 mt-5 text-center">
          <i class="fas fa-sliders-h font-xlll text-primary mb-3"></i>
          <h5 class="mb-4">Property Listings</h5>
          <p>Are you looking for a genuine  home (commercial & Residential), an office space, lands? Findpropx boasts an extensive and diverse database of properties available for sale and rent. With just a few clicks, you can find your dream property with ease.</p>
        </div>
        <div class="col-lg-4 col-sm-6 mt-5 text-center">
          <i class="fas fa-file-invoice-dollar font-xlll text-primary mb-3"></i>
          <h5 class="mb-4">Land Sales</h5>
          <p>For those seeking lucrative investment opportunities, our platform offers a wide range of lands available for sale. Whether you're planning to build your dream house or invest in a real estate venture, we have the perfect piece of land for you.</p>
        </div>
        <div class="col-lg-4 col-sm-6 mt-5 text-center">
          <i class="fas fa-user-friends font-xlll text-primary mb-3"></i>
          <h5 class="mb-4">Seller's Advantage</h5>
          <p>If you are a property owner or a real estate agent, Findpropx provides you with a powerful platform to showcase your listings to a vast audience of potential buyers. Our advanced marketing tools and analytics help you reach the right audience and close deals faster.</p>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Service -->


@endsection
