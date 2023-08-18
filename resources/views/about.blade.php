@extends('layouts.pageheader')
@section('content')
        <section class="headings">
            <div class="text-heading text-center">
                <div class="container">
                    <h1>About Our Company</h1>
                    <h2><a href="{{url('/')}}">Home </a> &nbsp;/&nbsp; About Us</h2>
                </div>
            </div>
        </section>
        <!-- START SECTION ABOUT -->
        <section class="about-us fh">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12 who-1">
                        <div>
                            <h2 class="text-left mb-4">About <span>FindPropx</span></h2>
                        </div>
                        <div class="pftext">
                            <h3>Discover Your Dream Property with Findpropx</h3>
                            <p>
                                Are you in search of the perfect property for buy, sale, rent, or
                                perhaps a lucrative piece of land to invest in? Look no further!
                                Findpropx is your one-stop destination for all your property marketing
                                needs. We specialize in connecting individuals and organizations to the
                                best real estate opportunities, ensuring a seamless and efficient
                                experience for both buyers and sellers.
                            </p>

                            <p>
                                At Findpropx, we are passionate about simplifying the property buying,
                                selling, and renting process. Our platform offers a user-friendly and
                                intuitive interface, allowing you to easily navigate through a vast
                                array of property listings. Whether you're a first-time homebuyer,
                                a seasoned investor, or a property owner looking to market your assets,
                                Findpropx has got you covered.
                            </p>
                        </div>
                        {{-- <div class="box bg-2">
                            <a href="about.html" class="text-center button button--moema button--text-thick button--text-upper button--size-s">read More</a>
                            <img src="{{asset('frontend/assets/images/signature.png')}}" class="ml-5" alt="">
                        </div> --}}
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12">
                        <div class="wprt-image-video w50">
                            <img alt="image" src="{{asset('frontend/assets/images/bg/bg-video.jpg')}}">
                            <a class="icon-wrap popup-video popup-youtube" href="https://www.youtube.com/watch?v=2xHQqYRcrx4">
                                <i class="fa fa-play"></i>
                            </a>
                            <div class="iq-waves">
                                <div class="waves wave-1"></div>
                                <div class="waves wave-2"></div>
                                <div class="waves wave-3"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END SECTION ABOUT -->

        <!-- START SECTION WHY CHOOSE US -->
        <section class="how-it-works bg-white-2">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Why </span>Choose Us</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="row service-1">
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                        <div class="serv-flex">
                            <div class="art-1 img-13">
                                <img src="{{asset('frontend/assets/images/icons/icon-5.svg')}}" alt="">
                                <h3>User-Friendly Interface</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">
                                    Our website is designed with simplicity in mind, making it
                                    easy for anyone to navigate and find their desired property.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv" data-aos="fade-up">
                        <div class="serv-flex">
                            <div class="art-1 img-14">
                                <img src="{{asset('frontend/assets/images/icons/icon-4.svg')}}" alt="">
                                <h3>Extensive Database</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">
                                    We curate a diverse range of properties and lands, ensuring that you
                                    have plenty of options to choose from.
                                </p>
                            </div>
                        </div>
                    </article>
                    <article class="col-lg-4 col-md-6 col-xs-12 serv mb-0 pt" data-aos="fade-up">
                        <div class="serv-flex arrow">
                            <div class="art-1 img-15">
                                <img src="{{asset('frontend/assets/images/icons/icon-6.svg')}}" alt="">
                                <h3>Secure Transactions</h3>
                            </div>
                            <div class="service-text-p">
                                <p class="text-center">
                                    Findpropx employs advanced encryption and security measures to protect your personal and financial information.
                                </p>
                            </div>
                        </div>
                    </article>
                </div>
            </div>
        </section>
        <!-- END SECTION WHY CHOOSE US -->

        <!-- START SECTION COUNTER UP -->
        {{-- <section class="counterup">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr">
                            <i class="fa fa-home" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">300</p>
                                <h3>Sold Houses</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr">
                            <i class="fa fa-list" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">400</p>
                                <h3>Daily Listings</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr mb-0">
                            <i class="fa fa-users" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">250</p>
                                <h3>Expert Agents</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-xs-12">
                        <div class="countr mb-0 last">
                            <i class="fa fa-trophy" aria-hidden="true"></i>
                            <div class="count-me">
                                <p class="counter text-left">200</p>
                                <h3>Won Awars</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- END SECTION COUNTER UP -->

        <!-- START SECTION AGENTS -->
        {{-- <section class="team">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Our </span>Team</h2>
                    <p>We provide full service at every step.</p>
                </div>
                <div class="row team-all">
                    <div class="col-lg-3 col-md-6 team-pro">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{ asset('frontend/assets/images/team/t-5.jpg') }}" alt="" />
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>Carls Jhons</h3>
                                    <p>Financial Advisor</p>
                                    <div class="team-socials">
                                        <ul>
                                            <li>
                                                <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span><a href="team-details.html">View Profile</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team-pro">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{ asset('frontend/assets/images/team/t-6.jpg') }}" alt="" />
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>Arling Tracy</h3>
                                    <p>Acountant</p>
                                    <div class="team-socials">
                                        <ul>
                                            <li>
                                                <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span><a href="team-details.html">View Profile</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team-pro pb-none">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{ asset('frontend/assets/images/team/t-7.jpg') }}" alt="" />
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>Mark Web</h3>
                                    <p>Founder &amp; CEO</p>
                                    <div class="team-socials">
                                        <ul>
                                            <li>
                                                <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span><a href="team-details.html">View Profile</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 team-pro kat">
                        <div class="team-wrap">
                            <div class="team-img">
                                <img src="{{ asset('frontend/assets/images/team/t-8.jpg') }}" alt="" />
                            </div>
                            <div class="team-content">
                                <div class="team-info">
                                    <h3>Katy Grace</h3>
                                    <p>Team Leader</p>
                                    <div class="team-socials">
                                        <ul>
                                            <li>
                                                <a href="#" title="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                                <a href="#" title="twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                                <a href="#" title="instagran"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <span><a href="team-details.html">View Profile</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- END SECTION AGENTS -->

        <!-- START SECTION TESTIMONIALS -->
        {{-- <section class="testimonials home18 bg-white">
            <div class="container">
               <div class="sec-title">
                    <h2><span>Clients </span>Testimonials</h2>
                    <p>We collect reviews from our customers.</p>
                </div>
                <div class="owl-carousel style1">
                    <div class="test-1 pb-0 pt-0">
                        <img src="{{ asset('frontend/assets/images/testimonials/ts-1.jpg') }}" alt="">
                        <h3 class="mt-3 mb-0">Lisa Smith</h3>
                        <h6 class="mt-1">New York</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1 pb-0 pt-0">
                        <img src="{{ asset('frontend/assets/images/testimonials/ts-2.jpg') }}" alt="">
                        <h3 class="mt-3 mb-0">Jhon Morris</h3>
                        <h6 class="mt-1">Los Angeles</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1 pt-0">
                        <img src="{{ asset('frontend/assets/images/testimonials/ts-3.jpg') }}" alt="">
                        <h3 class="mt-3 mb-0">Mary Deshaw</h3>
                        <h6 class="mt-1">Chicago</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1 pt-0">
                        <img src="images/testimonials/ts-4.jpg" alt="">
                        <h3 class="mt-3 mb-0">Gary Steven</h3>
                        <h6 class="mt-1">Philadelphia</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1 pt-0">
                        <img src="images/testimonials/ts-5.jpg" alt="">
                        <h3 class="mt-3 mb-0">Cristy Mayer</h3>
                        <h6 class="mt-1">San Francisco</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                    <div class="test-1 pt-0">
                        <img src="images/testimonials/ts-6.jpg" alt="">
                        <h3 class="mt-3 mb-0">Ichiro Tasaka</h3>
                        <h6 class="mt-1">Houston</h6>
                        <ul class="starts text-center mb-2">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-o"></i>
                            </li>
                        </ul>
                        <p>Lorem ipsum dolor sit amet, ligula magna at etiam aliquip venenatis. Vitae sit felis donec, suscipit tortor et sapien donec.</p>
                    </div>
                </div>
            </div>
        </section> --}}
        <!-- END SECTION TESTIMONIALS -->

        <!-- STAR SECTION PARTNERS -->
        {{-- <div class="partners bg-white-2">
            <div class="container">
                <div class="sec-title">
                    <h2><span>Our </span>Partners</h2>
                    <p>The Companies That Represent Us.</p>
                </div>
                <div class="owl-carousel style2">
                    <div class="owl-item"><img src="{{asset('frontend/assets/images/partners/11.jpg')}}" alt=""></div>
                    <div class="owl-item"><img src="{{asset('frontend/assets/images/partners/12.jpg')}}" alt=""></div>
                    <div class="owl-item"><img src="{{asset('frontend/assets/images/partners/13.jpg')}}" alt=""></div>
                    <div class="owl-item"><img src="{{asset('frontend/assets/images/partners/14.jpg')}}" alt=""></div>
                    <div class="owl-item"><img src="{{asset('frontend/assets/images/partners/15.jpg')}}" alt=""></div>
                    <div class="owl-item"><img src="{{asset('frontend/assets/images/partners/16.jpg')}}" alt=""></div>
                    <div class="owl-item"><img src="{{asset('frontend/assets/images/partners/17.jpg')}}" alt=""></div>
                    <div class="owl-item"><img src="{{asset('frontend/assets/images/partners/11.jpg')}}" alt=""></div>
                    <div class="owl-item"><img src="{{asset('frontend/assets/images/partners/12.jpg')}}" alt=""></div>
                    <div class="owl-item"><img src="{{asset('frontend/assets/images/partners/13.jpg')}}" alt=""></div>
                </div>
            </div>
        </div> --}}
        <!-- END SECTION PARTNERS -->



@endsection
