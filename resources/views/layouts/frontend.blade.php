<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{ config('app.name', 'FindPropx') }}</title>
        <!-- FAVICON -->
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/icons/favicon.ico') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/jquery-ui.css') }}">
        <!-- GOOGLE FONTS -->
        <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
        <!-- FONT AWESOME -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/font/flaticon.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-5-all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}">
        <!-- ARCHIVES CSS -->
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/search.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/aos2.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightcase.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/menu.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/styles.css') }}">
        <link rel="stylesheet" href="{{ asset('frontend/assets/css/maps.css') }}">
        <link rel="stylesheet" id="color" href="{{ asset('frontend/assets/css/colors/pink.css') }}">
    </head>

    <body class="homepage-9 hp-6 homepage-1 mh">
        <!-- Wrapper -->
        <div id="wrapper">
            <!-- START SECTION HEADINGS -->
            <!-- Header Container
            ================================================== -->
            <header id="header-container" class="header head-tr">
                <!-- Header -->
                @include('inc.frontend.navbar')
                <!-- Header / End -->

            </header>
            <div class="clearfix"></div>
            <!-- Header Container / End -->

            @yield('content')

            <!-- START FOOTER -->
            @include('inc.frontend.pagefooter')


            <!-- END FOOTER -->

            <!--register form -->
            {{-- <div class="login-and-register-form modal">
                <div class="main-overlay"></div>
                <div class="main-register-holder">
                    <div class="main-register fl-wrap">
                        <div class="close-reg"><i class="fa fa-times"></i></div>
                        <h3>Welcome to <span>Find<strong>Houses</strong></span></h3>
                        <div class="soc-log fl-wrap">
                            <p>Login</p>
                            <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                            <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
                        </div>
                        <div class="log-separator fl-wrap"><span>Or</span></div>
                        <div id="tabs-container">
                            <ul class="tabs-menu">
                                <li class="current"><a href="#tab-1">Login</a></li>
                                <li><a href="#tab-2">Register</a></li>
                            </ul>
                            <div class="tab">
                                <div id="tab-1" class="tab-contents">
                                    <div class="custom-form">
                                        <form method="post" name="registerform">
                                            <label>Username or Email Address * </label>
                                            <input name="email" type="text" onClick="this.select()" value="">
                                            <label>Password * </label>
                                            <input name="password" type="password" onClick="this.select()" value="">
                                            <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                            <div class="clearfix"></div>
                                            <div class="filter-tags">
                                                <input id="check-a" type="checkbox" name="check">
                                                <label for="check-a">Remember me</label>
                                            </div>
                                        </form>
                                        <div class="lost_password">
                                            <a href="#">Lost Your Password?</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab">
                                    <div id="tab-2" class="tab-contents">
                                        <div class="custom-form">
                                            <form method="post" name="registerform" class="main-register-form" id="main-register-form2">
                                                <label>First Name * </label>
                                                <input name="name" type="text" onClick="this.select()" value="">
                                                <label>Second Name *</label>
                                                <input name="name2" type="text" onClick="this.select()" value="">
                                                <label>Email Address *</label>
                                                <input name="email" type="text" onClick="this.select()" value="">
                                                <label>Password *</label>
                                                <input name="password" type="password" onClick="this.select()" value="">
                                                <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <!--register form end -->

            <!-- START PRELOADER -->
            <div id="preloader">
                <div id="status">
                    <div class="status-mes"></div>
                </div>
            </div>
            <!-- END PRELOADER -->

            <!-- ARCHIVES JS -->
            
            <script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/rangeSlider.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/tether.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/popper.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/moment.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/mmenu.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/mmenu.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/aos.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/aos2.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/animate.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/slick.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/fitvids.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/typed.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/imagesloaded.pkgd.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/isotope.pkgd.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/smooth-scroll.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/lightcase.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/search.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/owl.carousel.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/ajaxchimp.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/newsletter.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/jquery.form.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/jquery.validate.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/searched.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/forms-2.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/map-style2.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/range.js') }}"></script>
            <script src="{{ asset('frontend/assets/js/color-switcher.js') }}"></script>
            <script>
                $(window).on('scroll load', function() {
                    $("#header.cloned #logo img").attr("src", $('#header #logo img').attr('data-sticky-logo'));
                });

            </script>

            <!-- Slider Revolution scripts -->
            <script src="{{ asset('frontend/assets/revolution/js/jquery.themepunch.tools.min.js') }}"></script>
            <script src="{{ asset('frontend/assets/revolution/js/jquery.themepunch.revolution.min.js') }}"></script>

            <script>
                var typed = new Typed('.typed', {
                    strings: ["House ^2000", "Apartment ^2000", "Plaza ^4000"],
                    smartBackspace: false,
                    loop: true,
                    showCursor: true,
                    cursorChar: "|",
                    typeSpeed: 50,
                    backSpeed: 30,
                    startDelay: 800
                });

            </script>

            <script>
                $('.slick-lancers').slick({
                    infinite: false,
                    slidesToShow: 4,
                    slidesToScroll: 1,
                    dots: true,
                    arrows: false,
                    adaptiveHeight: true,
                    responsive: [{
                        breakpoint: 1292,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: true,
                            arrows: false
                        }
                    }, {
                        breakpoint: 993,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                            dots: true,
                            arrows: false
                        }
                    }, {
                        breakpoint: 769,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
                            dots: true,
                            arrows: false
                        }
                    }]
                });

            </script>

            <script>
                $('.job_clientSlide').owlCarousel({
                    items: 2,
                    loop: true,
                    margin: 30,
                    autoplay: false,
                    nav: true,
                    smartSpeed: 1000,
                    slideSpeed: 1000,
                    navText: ["<i class='fa fa-chevron-left'></i>", "<i class='fa fa-chevron-right'></i>"],
                    dots: false,
                    responsive: {
                        0: {
                            items: 1
                        },
                        991: {
                            items: 3
                        }
                    }
                });

            </script>

            <script>
                $('.style2').owlCarousel({
                    loop: true,
                    margin: 0,
                    dots: false,
                    autoWidth: false,
                    autoplay: true,
                    autoplayTimeout: 5000,
                    responsive: {
                        0: {
                            items: 2,
                            margin: 20
                        },
                        400: {
                            items: 2,
                            margin: 20
                        },
                        500: {
                            items: 3,
                            margin: 20
                        },
                        768: {
                            items: 4,
                            margin: 20
                        },
                        992: {
                            items: 5,
                            margin: 20
                        },
                        1000: {
                            items: 7,
                            margin: 20
                        }
                    }
                });

            </script>

            <script>
                $(".dropdown-filter").on('click', function() {

                    $(".explore__form-checkbox-list").toggleClass("filter-block");

                });

            </script>

            <!-- MAIN JS -->
            <script src="{{ asset('frontend/assets/js/script.js') }}"></script>

        </div>
        <!-- Wrapper / End -->
    </body>
</html>
