@extends('layouts.frontend')

@section('content')

            <!-- STAR HEADER SEARCH -->
            <section id="hero-area" class="parallax-searchs overlay home15 thome-6 thome-1" data-stellar-background-ratio="0.5">
                <div class="hero-main">
                    <div class="container" data-aos="zoom-in">
                        <div class="row">
                            <div class="col-12">
                                <div class="hero-inner">
                                    <!-- Welcome Text -->
                                    <div class="welcome-text">
                                        <h1 class="h1">Find Your Dream
                                        <br class="d-md-none">
                                        <span class="typed border-bottom"></span>
                                    </h1>
                                        <p class="mt-4">We Have Over Million Properties For You.</p>
                                    </div>
                                    <!--/ End Welcome Text -->
                                    <!-- Search Form -->
                                    <div class="col-12">
                                        <div class="banner-search-wrap">
                                            <ul class="nav nav-tabs rld-banner-tab">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#tabs_1">For Sale</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabs_2">For Rent</a>
                                                </li>
                                            </ul>
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
                                                                    @foreach ($type as $ty )
                                                                    <option value="{{ $ty->id }}">{{ $ty->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="rld-single-select">
                                                                <select onchange="pickLga(this.id)" id="statespicker" class="select single-select mr-0">
                                                                    <option value="1">state</option>
                                                                    @foreach ($state as $ty )
                                                                    <option value="{{ $ty->id }}">{{ $ty->name }}</option>
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                            <div class="rld-single-select">
                                                                <select class="select single-select mx-2" id="lgapicker" data-toggle="select2" data-placeholder="Choose a Country...">

                                                                </select>
                                                            </div>

                                                            {{-- <div class="dropdown-filter"><span>Advanced Search</span></div> --}}
                                                            <div class="col-xl-2 col-lg-2 col-md-4 pl-0">
                                                                <a class="btn btn-yellow" href="#">Search Now</a>
                                                            </div>
                                                            {{-- <div class="explore__form-checkbox-list full-filter">
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
                                                                    <div class="col-lg-4 col-md-6 py-1 pr-30 pl-0">
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
                                                                    <div class="col-lg-5 col-md-12 col-sm-12 py-1 pr-30 mr-5 sld d-none d-lg-none d-xl-flex">
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
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex">
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
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30 d-none d-lg-none d-xl-flex">
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
                                                            </div> --}}
                                                        </div>
                                                    </div>
                                                </div>
                                                {{-- <div class="tab-pane fade" id="tabs_2">
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
                                                                                <div id="area-range-rent" data-min="0" data-max="1300" data-unit="sq ft"></div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                            <br>
                                                                            <!-- Price Range -->
                                                                            <div class="range-slider">
                                                                                <label>Price Range</label>
                                                                                <div id="price-range-rent" data-min="0" data-max="600000" data-unit="$"></div>
                                                                                <div class="clearfix"></div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                        <!-- Checkboxes -->
                                                                        <div class="checkboxes one-in-row margin-bottom-10 ch-1">
                                                                            <input id="check-16" type="checkbox" name="check">
                                                                            <label for="check-16">Air Conditioning</label>
                                                                            <input id="check-17" type="checkbox" name="check">
                                                                            <label for="check-17">Swimming Pool</label>
                                                                            <input id="check-18" type="checkbox" name="check">
                                                                            <label for="check-18">Central Heating</label>
                                                                            <input id="check-19" type="checkbox" name="check">
                                                                            <label for="check-19">Laundry Room</label>
                                                                            <input id="check-20" type="checkbox" name="check">
                                                                            <label for="check-20">Gym</label>
                                                                            <input id="check-21" type="checkbox" name="check">
                                                                            <label for="check-21">Alarm</label>
                                                                            <input id="check-22" type="checkbox" name="check">
                                                                            <label for="check-22">Window Covering</label>
                                                                        </div>
                                                                        <!-- Checkboxes / End -->
                                                                    </div>
                                                                    <div class="col-lg-3 col-md-6 col-sm-12 py-1 pr-30">
                                                                        <!-- Checkboxes -->
                                                                        <div class="checkboxes one-in-row margin-bottom-10 ch-2">
                                                                            <input id="check-23" type="checkbox" name="check">
                                                                            <label for="check-23">WiFi</label>
                                                                            <input id="check-24" type="checkbox" name="check">
                                                                            <label for="check-24">TV Cable</label>
                                                                            <input id="check-25" type="checkbox" name="check">
                                                                            <label for="check-25">Dryer</label>
                                                                            <input id="check-26" type="checkbox" name="check">
                                                                            <label for="check-26">Microwave</label>
                                                                            <input id="check-27" type="checkbox" name="check">
                                                                            <label for="check-27">Washer</label>
                                                                            <input id="check-28" type="checkbox" name="check">
                                                                            <label for="check-28">Refrigerator</label>
                                                                            <input id="check-29" type="checkbox" name="check">
                                                                            <label for="check-29">Outdoor Shower</label>
                                                                        </div>
                                                                        <!-- Checkboxes / End -->
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                            </div>
                                        </div>
                                    </div>
                                    <!--/ End Search Form -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END HEADER SEARCH -->


            <!-- START SECTION FEATURED PROPERTIES -->
            <section class="featured portfolio bg-white-2 rec-pro full-l">
                <div class="container-fluid">
                    <div class="sec-title">
                        <h2><span>Featured </span>Properties</h2>
                        <p>These are our featured properties</p>
                    </div>
                    <div class="row portfolio-items">
                        @foreach ($houses as $house)
                        <div class="item col-xl-6 col-lg-12 col-md-12 col-xs-12 landscapes sale">
                            <div class="project-single" data-aos="fade-right">
                                <div class="project-inner project-head">
                                    <div class="homes">
                                        <!-- homes img -->
                                        <a href="{{ url('single/'.$house->id) }}" class="homes-img">
                                            <div class="homes-tag button alt featured">Featured</div>
                                            <div class="homes-tag button alt sale">{{ $house->status->name ?? '' }}</div>
                                            <img src="/{{ $house->images[0]->img_url?? 'no image' }}"  alt="home-1" class="img-responsive">
                                        </a>
                                    </div>
                                    <div class="button-effect">
                                        <a href="{{ url('single/'.$house->id) }}" class="btn"><i class="fa fa-link"></i></a>
                                        <a href="{{ $house->video }}" class="btn popup-video popup-youtube"><i class="fas fa-video"></i></a>
                                        <a href="{{ url('single/'.$house->id) }}" class="img-poppu btn"><i class="fa fa-photo"></i></a>
                                    </div>
                                </div>
                                <!-- homes content -->
                                <div class="homes-content">
                                    <!-- homes address -->
                                    <h3><a href="single-property-1.html">{{ $house->title }}</a></h3>
                                    <p class="homes-address mb-3">
                                        <a href="single-property-1.html">
                                            <i class="fa fa-map-marker"></i><span>{{ $house->city }}&nbsp-&nbsp{{ $house->lgas->local_name }},&nbsp{{  $house->states->name }}</span>
                                        </a>
                                    </p>
                                    <!-- homes List -->
                                    <ul class="homes-list clearfix pb-3">
                                        <li class="the-icons">
                                            <i class="flaticon-bed mr-2" aria-hidden="true"></i>
                                            <span>{{ $house->rooms }} Bedrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-bathtub mr-2" aria-hidden="true"></i>
                                            <span>3 Bathrooms</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-square mr-2" aria-hidden="true"></i>
                                            <span>{{ $house->area }}&nbspSq Ft</span>
                                        </li>
                                        <li class="the-icons">
                                            <i class="flaticon-car mr-2" aria-hidden="true"></i>
                                            <span>2 Garages</span>
                                        </li>
                                    </ul>
                                    <div class="price-properties footer pt-3 pb-0">
                                        <h3 class="title mt-3">
                                         <a href="single-property-1.html">₦ {{ $house->price }}</a>
                                        </h3>
                                        <div class="compare">
                                            <a href="#" title="Compare">
                                                <i class="flaticon-compare"></i>
                                            </a>
                                            <a href="#" title="Share">
                                                <i class="flaticon-share"></i>
                                            </a>
                                            <a href="#" title="Favorites">
                                                <i class="flaticon-heart"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                    <div class="bg-all">
                        <a href="{{ url('/list') }}" class="btn btn-outline-light">View More</a>
                    </div>
                </div>
            </section>
            <!-- END SECTION FEATURED PROPERTIES -->

            <!-- START SECTION WHY CHOOSE US -->
            <section class="how-it-works bg-white rec-pro">
                <div class="container-fluid">
                    <div class="sec-title">
                        <h2><span>Why </span>Choose Us</h2>
                        <p>We provide full service at every step.</p>
                    </div>
                    <div class="row service-1">
                        <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="150">
                            <div class="serv-flex">
                                <div class="art-1 img-13">
                                    <img src="{{ asset('frontend/assets/images/icons/icon-4.svg') }}" alt="">
                                    <h3>Wide Renge Of Properties</h3>
                                </div>
                                <div class="service-text-p">
                                    <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                                </div>
                            </div>
                        </article>
                        <article class="col-lg-3 col-md-6 col-xs-12 serv" data-aos="fade-up" data-aos-delay="250">
                            <div class="serv-flex">
                                <div class="art-1 img-14">
                                    <img src="{{ asset('frontend/assets/images/icons/icon-5.svg') }}" alt="">
                                    <h3>Trusted by thousands</h3>
                                </div>
                                <div class="service-text-p">
                                    <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                                </div>
                            </div>
                        </article>
                        <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up" data-aos-delay="350">
                            <div class="serv-flex arrow">
                                <div class="art-1 img-15">
                                    <img src="{{ asset('frontend/assets/images/icons/icon-6.svg') }}" alt="">
                                    <h3>Financing made easy</h3>
                                </div>
                                <div class="service-text-p">
                                    <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                                </div>
                            </div>
                        </article>
                        <article class="col-lg-3 col-md-6 col-xs-12 serv mb-0 pt its-2" data-aos="fade-up" data-aos-delay="450">
                            <div class="serv-flex">
                                <div class="art-1 img-14">
                                    <img src="{{ asset('frontend/assets/images/icons/icon-15.svg') }}" alt="">
                                    <h3>We are here near you</h3>
                                </div>
                                <div class="service-text-p">
                                    <p class="text-center">lorem ipsum dolor sit amet, consectetur pro adipisici consectetur debits adipisicing lacus consectetur Business Directory.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </section>
            <!-- END SECTION WHY CHOOSE US -->

            <!-- START SECTION RECENTLY PROPERTIES -->
            <section class="featured portfolio rec-pro disc">
                <div class="container-fluid">
                    <div class="sec-title discover">
                        <h2><span>Meet Our </span>Agents</h2>
                        <p>Our Agents are here to help you</p>
                    </div>
                    <div class="portfolio col-xl-12">
                        <div class="slick-lancers">
                            @foreach ($users as $user )
                            <div class="agents-grid" data-aos="fade-up" data-aos-delay="150">
                                <div class="landscapes">
                                    <div class="project-single">
                                        <div class="project-inner project-head">
                                            <div class="homes">
                                                <!-- homes img -->
                                                <a href="#" class="homes-img">
                                                    <img src="{{ asset('upload/admin-dp/'.$user->image)?? '' }}" style="height: 300px" alt="home-1" class="img-responsive">
                                                </a>
                                            </div>
                                        </div>
                                        <!-- homes content -->
                                        <div class="homes-content">
                                            <!-- homes address -->
                                            <h3><a href="single-property-1.html">{{ $user->name }}</a></h3>
                                            <!-- homes List -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION RECENTLY PROPERTIES -->

            <section class="testimonials bg-white-2 rec-pro">
                <div class="container-fluid">
                    <div class="sec-title">
                        <h2><span>Clients </span>Testimonials</h2>
                        <p>We collect reviews from our customers.</p>
                    </div>
                    <div class="owl-carousel job_clientSlide">
                        <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="150">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                            </p>
                            <div class="detailJC">
                                <span><img src="{{ asset('frontend/assets/images/testimonials/ts-1.jpg') }}" alt=""/></span>
                                <h5>Lisa Smith</h5>
                                <p>New York</p>
                            </div>
                        </div>
                        <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="250">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                            </p>
                            <div class="detailJC">
                                <span><img src="images/testimonials/ts-2.jpg" alt=""/></span>
                                <h5>Jhon Morris</h5>
                                <p>Los Angeles</p>
                            </div>
                        </div>
                        <div class="singleJobClinet" data-aos="zoom-in" data-aos-delay="350">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                            </p>
                            <div class="detailJC">
                                <span><img src="images/testimonials/ts-3.jpg" alt=""/></span>
                                <h5>Mary Deshaw</h5>
                                <p>Chicago</p>
                            </div>
                        </div>
                        <div class="singleJobClinet">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                            </p>
                            <div class="detailJC">
                                <span><img src="images/testimonials/ts-4.jpg" alt=""/></span>
                                <h5>Gary Steven</h5>
                                <p>Philadelphia</p>
                            </div>
                        </div>
                        <div class="singleJobClinet">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                            </p>
                            <div class="detailJC">
                                <span><img src="images/testimonials/ts-5.jpg" alt=""/></span>
                                <h5>Cristy Mayer</h5>
                                <p>San Francisco</p>
                            </div>
                        </div>
                        <div class="singleJobClinet">
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore gna a. Ut enim ad minim veniam,
                            </p>
                            <div class="detailJC">
                                <span><img src="images/testimonials/ts-6.jpg" alt=""/></span>
                                <h5>Ichiro Tasaka</h5>
                                <p>Houston</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END SECTION TESTIMONIALS -->

            <!-- STAR SECTION PARTNERS -->
            <div class="partners bg-white rec-pro">
                <div class="container-fluid">
                    <div class="sec-title">
                        <h2><span>Our </span>Partners</h2>
                        <p>The Companies That Represent Us.</p>
                    </div>
                    <div class="owl-carousel style2">
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/14.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/15.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/16.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/17.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/11.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/12.jpg" alt=""></div>
                        <div class="owl-item" data-aos="fade-up"><img src="images/partners/13.jpg" alt=""></div>
                    </div>
                </div>
            </div>
            <!-- END SECTION PARTNERS -->

            <script>
                function pickLga(stateid){
                   alert(document.getElementById(stateid).value);
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
