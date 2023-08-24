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
header -->

<!--=================================
breadcrumb -->
<div class="bg-light">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <ol class="breadcrumb mb-0">
            <li class="breadcrumb-item"><a href="{{ url('/') }}"> <i class="fas fa-home"></i> </a></li>
            <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a href="{{ url('/list') }}">All Properties</a></li>
            <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> Property </span></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--=================================
  breadcrumb -->

  <!--=================================
  Listing – grid view -->
  <section class="space-ptb">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="section-title mb-3 mb-lg-4">
            {{-- <h2><span class="text-primary">156</span> Results</h2> --}}
          </div>
        </div>
        <div class="col-md-6">
          <div class="property-filter-tag">
            <ul class="list-unstyled">
              <li><a href="{{ url('/list') }}">Refresh <i class="fas fa-redo-alt"></i> </a></li>
              {{-- <li><a class="filter-clear" href="{{ url('/list') }}">Reset Search <i class="fas fa-redo-alt"></i> </a></li> --}}
            </ul>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-3 mb-5 mb-lg-0">
          <div class="sidebar">
            {{-- <div class="widget">
              <div class="widget-title widget-collapse">
                <h6>Advanced filter</h6>
                <a class="ms-auto" data-bs-toggle="collapse" href="#filter-property" role="button" aria-expanded="false" aria-controls="filter-property"> <i class="fas fa-chevron-down"></i> </a>
              </div>
              <div class="collapse show" id="filter-property">
                <form class="mt-3">
                  <div class="mb-2 select-border">
                    <select class="form-control basic-select" id="typeFilter">
                        <option value="">All States</option>
                        @foreach ($states as $ty)
                            <option value="{{ $ty->id }}">{{ $ty->name }}</option>
                        @endforeach
                    </select>
                  </div>
                  <div class="mb-2 select-border">
                    <select class="form-control basic-select">
                      <option>For Rent</option>
                      <option>For Sale</option>
                    </select>
                  </div>
                  <div class="mb-2 select-border">
                    <select class="form-control basic-select">
                      <option>Distance from location</option>
                      <option>Within 1 mile</option>
                      <option>Within 3 miles</option>
                      <option>Within 5 miles</option>
                      <option>Within 10 miles</option>
                      <option>Within 15 miles</option>
                      <option>Within 30 miles</option>
                    </select>
                  </div>
                  <div class="mb-2 select-border">
                    <select class="form-control basic-select">
                      <option>Bedrooms</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                    </select>
                  </div>
                  <div class="mb-2 select-border">
                    <select class="form-control basic-select">
                      <option>Sort by</option>
                      <option>Most popular</option>
                      <option>Highest price</option>
                      <option>Lowest price</option>
                      <option>Most reduced</option>
                    </select>
                  </div>
                  <div class="mb-2 select-border">
                    <select class="form-control basic-select">
                      <option>Select Floor</option>
                      <option>01</option>
                      <option>02</option>
                      <option>03</option>
                    </select>
                  </div>
                  <div class="mb-2">
                    <input class="form-control" placeholder="Type (sq ft)">
                  </div>
                  <div class="mb-2">
                    <input class="form-control" placeholder="Type (sq ft)">
                  </div>
                   <div class="mb-3 property-price-slider mt-3">
                    <label class="form-label">Select Price Range</label>
                    <input type="text" id="property-price-slider" name="example_name" value="" />
                  </div>
                  <div class="d-grid mb-2">
                    <button class="btn btn-primary align-items-center" type="submit"><i class="fas fa-filter me-1"></i><span>Filter</span></button>
                  </div>
                </form>
              </div>
            </div> --}}
            <div class="widget">
              <div class="widget-title widget-collapse">
                <h6>Filter Properties By Status</h6>
                <a class="ms-auto" data-bs-toggle="collapse" href="#status-property" role="button" aria-expanded="false" aria-controls="status-property"> <i class="fas fa-chevron-down"></i> </a>
              </div>
              <div class="collapse show" id="status-property">
                <ul class="list-unstyled mb-0 pt-3">
                  <li><a href="{{ url('/list') }}">All Status<span class="ms-auto"></span></a></li>
                  @foreach ($status as $st )
                  <li><a href="{{ url('/list') }}?status_id={{ $st->id }}">{{ $st->name }}
                    <span class="ms-auto">({{ $st->statusCount->count() }} ads)</span>
                  </a></li>
                  @endforeach
                </ul>
              </div>
            </div>
            <div class="widget">
              <div class="widget-title widget-collapse">
                <h6>Filter Properties By Types</h6>
                <a class="ms-auto" data-bs-toggle="collapse" href="#type-property" role="button" aria-expanded="false" aria-controls="type-property"> <i class="fas fa-chevron-down"></i> </a>
              </div>
              <div class="collapse show" id="type-property">
                <ul class="list-unstyled mb-0 pt-3">
                  <li><a href="{{ url('/list') }}">All Types<span class="ms-auto">({{ $totalHouses }})</span></a></li>
                    @foreach ($types as $ty)
                        <li><a href="{{ url('/list') }}?type_id={{ $ty->id }}">{{ $ty->name }}
                            <span class="ms-auto">
                                ({{ $ty->typeCount->count() }} ads)
                            </span>
                        </a></li>
                    @endforeach
                </ul>
              </div>
            </div>
            {{-- <div class="widget">
              <div class="widget-title">
                <h6>Mortgage calculator</h6>
              </div>
              <form>
                <div class="mb-2">
                  <div class="input-group input-group-box">
                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                    <input type="text" class="form-control" placeholder="Total Amount">
                   </div>
                </div>
                <div class="mb-2">
                  <div class="input-group input-group-box">
                    <span class="input-group-text"><i class="fas fa-dollar-sign"></i></span>
                    <input type="text" class="form-control" id="inlineFormInputGroup" placeholder="Down Payment">
                  </div>
                </div>
                <div class="mb-2">
                  <div class="input-group input-group-box">
                    <span class="input-group-text"><i class="fas fa-percent"></i></span>
                    <input type="text" class="form-control" placeholder="Interest Rate">
                   </div>
                </div>
                <div class="mb-2">
                  <div class="input-group input-group-box">
                    <span class="input-group-text"><i class="far fa-clock"></i></span>
                    <input type="text" class="form-control" placeholder="Loan Term (Years)">
                  </div>
                </div>
                <div class="mb-3 select-border">
                  <select class="form-control basic-select">
                    <option>Monthly</option>
                    <option>Weekly</option>
                    <option>Yearly</option>
                  </select>
                </div>
                <a class="btn btn-primary d-grid" href="#">Calculate</a>
              </form>
            </div> --}}
            <div class="widget">
              <div class="widget-title">
                <h6>Recently listed properties</h6>
              </div>
              @foreach ($recent as $re )
              <div class="recent-list-item">
                <img class="img-fluid" src="/{{ $re->images[0]->img_url?? 'no image' }}" style="width: 100px" alt="">
                <div class="recent-list-item-info">
                  <a class="address mb-2" href="property-detail-style-01.html">{{ $re->title }}</a>
                  <span class="text-primary">₦{{ $re->price }} </span>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
        <div class="col-lg-9">
          <div class="property-filter d-sm-flex">
            <ul class="property-short list-unstyled d-sm-flex mb-0">
              <li>
                <form class="form-inline">
                  <div class="d-lg-flex d-block mb-sm-0 mb-3">
                    <label class="justify-content-start mb-2 mb-sm-0">Short by: Locations</label>
                    <div class="short-by">
                        <select class="form-control basic-select" id="typeFilters">
                            <option>All States</option>
                            @foreach ($states as $ty)
                                <option value="{{ $ty->id }}">{{ $ty->name }}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                </form>
              </li>
            </ul>
            <ul class="property-view-list list-unstyled d-flex mb-0">
              <li>
                <form class="form-inline">
                  <div class="d-lg-flex d-block mb-3 mb-sm-0">
                    <label class="justify-content-start pe-2 mb-2 mb-sm-0"> </label>
                    <div class="short-by">
                        <select class="form-control basic-select" id="typeFilterss">
                            <option>All Local Govt Areas</option>
                            @foreach ($lgas as $ty)
                                <option value="{{ $ty->id }}">{{ $ty->local_name }}</option>
                            @endforeach
                        </select>
                    </div>
                  </div>
                </form>
              </li>
              {{-- <li><a href="index-half-map.html"><i class="fas fa-map-marker-alt fa-lg"></i></a></li>
              <li><a class="property-list-icon" href="property-list.html">
                <span></span>
                <span></span>
                <span></span>
              </a></li>
              <li><a class="property-grid-icon active" href="property-grid.html">
                <span></span>
                <span></span>
                <span></span>
              </a></li> --}}
            </ul>
          </div>
          <div class="row mt-4">
            @foreach ($houses as $house)
            <div class="col-sm-6">
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
                      <span class="d-block">Company Agent</span>
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
                      <li class="property-compare"><a data-bs-toggle="tooltip" data-placement="top" title="Compare" href="#"><i class="fas fa-exchange-alt"></i></a></li>
                      <li class="property-favourites"><a data-bs-toggle="tooltip" data-placement="top" title="Favourite" href="#"><i class="far fa-heart"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
          {{-- paginate section --}}
          <div class="row">
            <div class="col-12">
              <ul class="pagination mt-3">
                <li class="page-item disabled me-auto">
                  {{-- <span class="page-link b-radius-none">Prev</span> --}}
                </li>
                {{ $houses->links() }}
                <li class="page-item ms-auto">
                  {{-- <a class="page-link b-radius-none" href="#">Next</a> --}}
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  Listing – grid view -->


@endsection

