@extends('layouts.pageheader')

@section('content')
<section class="headings">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Properties List View</h1>
            <h2><a href="{{url('/')}}">Home </a> &nbsp;/&nbsp; List View</h2>
        </div>
    </div>
</section>

<!-- START SECTION PROPERTIES LISTING -->
<section class="properties-list full featured portfolio blog">
    <div class="container">
        <section class="headings-2 pt-0 pb-0">
            <div class="pro-wrapper">
                <div class="detail-wrapper-body">
                    <div class="listing-title-bar">
                        <div class="text-heading text-left">
                            <p><a href="index.html">Home </a> &nbsp;/&nbsp; <span>Listings</span></p>
                        </div>
                        <h3>List View</h3>
                    </div>
                </div>
            </div>
        </section>
        <!-- Search Form -->
        <div class="col-12 px-0 parallax-searchs">
            <div class="banner-search-wrap">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="tabs_1">
                        <div class="rld-main-search">
                            <div class="row">
                                <div class="rld-single-input">
                                    <input type="text" placeholder="Enter Keyword...">
                                </div>
                                <div class="rld-single-select ml-22">
                                    <select class="select single-select">
                                        <option value="1">Property Type</option>
                                        <option value="2">Family House</option>
                                        <option value="3">Apartment</option>
                                        <option value="3">Condo</option>
                                    </select>
                                </div>
                                <div class="rld-single-select">
                                    <select class="select single-select mr-0">
                                        <option value="1">Location</option>
                                        <option value="2">Los Angeles</option>
                                        <option value="3">Chicago</option>
                                        <option value="3">Philadelphia</option>
                                        <option value="3">San Francisco</option>
                                        <option value="3">Miami</option>
                                        <option value="3">Houston</option>
                                    </select>
                                </div>
                                <div class="dropdown-filter"><span>Advanced Search</span></div>
                                <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                    <a class="btn btn-yellow" href="#">Search Now</a>
                                </div>
                                <div class="explore__form-checkbox-list full-filter">
                                    <div class="row">
                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
                                            <!-- Form Property Status -->
                                            <div class="form-group categories">
                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-home"></i>Property Status</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option selected ">For Sale</li>
                                                        <li data-value="2" class="option">For Rent</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/ End Form Property Status -->
                                        </div>
                                        <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0 ">
                                            <!-- Form Bedrooms -->
                                            <div class="form-group beds">
                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bed" aria-hidden="true"></i> Bedrooms</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option selected">1</li>
                                                        <li data-value="2" class="option">2</li>
                                                        <li data-value="3" class="option">3</li>
                                                        <li data-value="3" class="option">4</li>
                                                        <li data-value="3" class="option">5</li>
                                                        <li data-value="3" class="option">6</li>
                                                        <li data-value="3" class="option">7</li>
                                                        <li data-value="3" class="option">8</li>
                                                        <li data-value="3" class="option">9</li>
                                                        <li data-value="3" class="option">10</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/ End Form Bedrooms -->
                                        </div>
                                        <div class="col-lg-4 col-md-6 py-1 pl-0 pr-0">
                                            <!-- Form Bathrooms -->
                                            <div class="form-group bath">
                                                <div class="nice-select form-control wide" tabindex="0"><span class="current"><i class="fa fa-bath" aria-hidden="true"></i> Bathrooms</span>
                                                    <ul class="list">
                                                        <li data-value="1" class="option selected">1</li>
                                                        <li data-value="2" class="option">2</li>
                                                        <li data-value="3" class="option">3</li>
                                                        <li data-value="3" class="option">4</li>
                                                        <li data-value="3" class="option">5</li>
                                                        <li data-value="3" class="option">6</li>
                                                        <li data-value="3" class="option">7</li>
                                                        <li data-value="3" class="option">8</li>
                                                        <li data-value="3" class="option">9</li>
                                                        <li data-value="3" class="option">10</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <!--/ End Form Bathrooms -->
                                        </div>
                                        <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld">
                                            <!-- Price Fields -->
                                            <div class="main-search-field-2">
                                                <!-- Area Range -->
                                                <div class="range-slider">
                                                    <label>Area Size</label>
                                                    <div id="area-range" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <br>
                                                <!-- Price Range -->
                                                <div class="range-slider">
                                                    <label>Price Range</label>
                                                    <div id="price-range" data-min="0" data-max="600000" data-unit="$"></div>
                                                    <div class="clearfix"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                            <!-- Checkboxes -->
                                            <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                <input id="check-2" type="checkbox" name="check">
                                                <label for="check-2">Air Conditioning</label>
                                                <input id="check-3" type="checkbox" name="check">
                                                <label for="check-3">Swimming Pool</label>
                                                <input id="check-4" type="checkbox" name="check">
                                                <label for="check-4">Central Heating</label>
                                                <input id="check-5" type="checkbox" name="check">
                                                <label for="check-5">Laundry Room</label>
                                                <input id="check-6" type="checkbox" name="check">
                                                <label for="check-6">Gym</label>
                                                <input id="check-7" type="checkbox" name="check">
                                                <label for="check-7">Alarm</label>
                                                <input id="check-8" type="checkbox" name="check">
                                                <label for="check-8">Window Covering</label>
                                            </div>
                                            <!-- Checkboxes / End -->
                                        </div>
                                        <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                            <!-- Checkboxes -->
                                            <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                <input id="check-9" type="checkbox" name="check">
                                                <label for="check-9">WiFi</label>
                                                <input id="check-10" type="checkbox" name="check">
                                                <label for="check-10">TV Cable</label>
                                                <input id="check-11" type="checkbox" name="check">
                                                <label for="check-11">Dryer</label>
                                                <input id="check-12" type="checkbox" name="check">
                                                <label for="check-12">Microwave</label>
                                                <input id="check-13" type="checkbox" name="check">
                                                <label for="check-13">Washer</label>
                                                <input id="check-14" type="checkbox" name="check">
                                                <label for="check-14">Refrigerator</label>
                                                <input id="check-15" type="checkbox" name="check">
                                                <label for="check-15">Outdoor Shower</label>
                                            </div>
                                            <!-- Checkboxes / End -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Search Form -->
        <section class="headings-2 pt-0">
            <div class="pro-wrapper">
                <div class="detail-wrapper-body">
                    <div class="listing-title-bar">
                        <div class="text-heading text-left">
                            <p class="font-weight-bold mb-0 mt-3">6 Search results</p>
                        </div>
                    </div>
                </div>
                <div class="cod-pad single detail-wrapper mr-2 mt-0 d-flex justify-content-md-end align-items-center">
                    <div class="input-group border rounded input-group-lg w-auto mr-4">
                        <label class="input-group-text bg-transparent border-0 text-uppercase letter-spacing-093 pr-1 pl-3" for="inputGroupSelect01"><i class="fas fa-align-left fs-16 pr-2"></i>Sortby:</label>
                        <select class="form-control border-0 bg-transparent shadow-none p-0 selectpicker sortby" data-style="bg-transparent border-0 font-weight-600 btn-lg pl-0 pr-3" id="inputGroupSelect01" name="sortby">
                            <option selected>Top Selling</option>
                            <option value="1">Most Viewed</option>
                            <option value="2">Price(low to high)</option>
                            <option value="3">Price(high to low)</option>
                        </select>
                    </div>
                    <div class="sorting-options">
                        <a href="{{url('/list2')}}" class="change-view-btn lde"><i class="fa fa-th-list"></i></a>
                        <a href="{{url('/list')}}" class="change-view-btn active-view-btn"><i class="fa fa-th-large"></i></a>
                    </div>
                </div>
            </div>
        </section>
        <div class="row featured portfolio-items">
            @foreach ( $houses as $house )

            <div class="item col-lg-4 col-md-12 col-xs-12 landscapes sale pr-0 pb-0 my-44 ft" data-aos="fade-up">
                <div class="project-single mb-0 bb-0">
                    <div class="project-inner project-head">
                        <div class="homes">
                            <!-- homes img -->
                            <a href="single-property-1.html" class="homes-img">
                                <div class="homes-tag button sale rent">For Rent</div>
                                <div class="homes-price">{{ $house->price }}</div>
                                <img src="/{{ $house->images[1]->img_url?? 'no image' }}" alt="home-1" class="img-responsive">
                            </a>
                        </div>
                        <div class="button-effect">
                            <a href="single-property-1.html" class="btn"><i class="fa fa-link"></i></a>
                            <a href="{{ url('upload/house/videos/'.$house->video) }}" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                            <a href="single-property-2.html" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- homes content -->
            <div class="col-lg-8 col-md-12 homes-content pb-0 my-44 ft mb-44" data-aos="fade-up">
                <!-- homes address -->
                <h3><a href="single-property-1.html">Real House Luxury Villa</a></h3>
                <p class="homes-address mb-3">
                    <a href="single-property-1.html">
                        <i class="fa fa-map-marker"></i><span>Est St, 77 - Central Park South, NYC</span>
                    </a>
                </p>
                <!-- homes List -->
                <ul class="homes-list clearfix pb-3">
                    <li class="the-icons">
                        <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                        <span>6 Bedrooms</span>
                    </li>
                    <li class="the-icons">
                        <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                        <span>3 Bathrooms</span>
                    </li>
                    <li class="the-icons">
                        <i class="flaticon-square mr-2" aria-hidden="true"></i>
                        <span>720 sq ft</span>
                    </li>
                    <li class="the-icons">
                        <i class="flaticon-car mr-2" aria-hidden="true"></i>
                        <span>2 Garages</span>
                    </li>
                </ul>
                <div class="footer">
                    <a href="agent-details.html">
                        <img src="images/testimonials/ts-2.jpg" alt="" class="mr-2"> Karl Smith
                    </a>
                    <span>
                        <i class="fa fa-calendar"></i> 2 months ago
                    </span>
                </div>
            </div>
            @endforeach
        </div>
        <nav aria-label="..." class="pt-0">
            <ul class="pagination lis-view">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1">Previous</a>
                </li>
                <li class="page-item active">
                    <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                </li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<!-- END SECTION PROPERTIES LISTING -->


@endsection
