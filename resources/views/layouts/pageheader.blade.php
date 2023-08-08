
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="html 5 template">
    <meta name="author" content="">
    <title>{{ config('app.name', 'FindPropx') }}</title>
    <!-- FAVICON -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/assets/images/icons/favicon.ico') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i%7CMontserrat:600,800" rel="stylesheet">
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/font/flaticon.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/fontawesome-5-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css')}}">
    <!-- ARCHIVES CSS -->

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/search.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/lightcase.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/menu.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styles.css')}}">
    <link rel="stylesheet" id="color" href="{{ asset('frontend/assets/css/default.css')}}">
</head>

<body class="inner-pages homepage-4 agents hp-6 full hd-white">
    <!-- Wrapper -->
    <div id="wrapper">
        <!-- START SECTION HEADINGS -->
        <!-- Header Container
        ================================================== -->
        <header id="header-container">
            <!-- Header -->
            @include('inc.frontend.pagenav')
            <!-- Header / End -->

        </header>
        <div class="clearfix"></div>
        <!-- Header Container / End -->
        <!-- END SECTION HEADINGS -->

        <!-- START SECTION PROPERTIES LISTING -->
       <div id="app">@yield('content')</div>
        <!-- END SECTION PROPERTIES LISTING -->

        <!-- START FOOTER -->
        @include('inc.frontend.pagefooter')
        <!-- END FOOTER -->

        <!-- ARCHIVES JS -->
        <script src="{{asset('js/app.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.counterup.min.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/counterup.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('frontend/assets/js/range-slider.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/slick.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/slick4.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/fitvids.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/timedropper.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/datedropper.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/jqueryadd-count.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/leaflet.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/leaflet-gesture-handling.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/leaflet-providers.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/leaflet.markercluster.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/map-single.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/jquery-3.5.1.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/rangeSlider.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/tether.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/popper.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/mmenu.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/mmenu.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/aos.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/aos2.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/smooth-scroll.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/lightcase.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/search.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/light.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/popup.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/searched.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/ajaxchimp.min.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/newsletter.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/inner.js')}}"></script>
        <script src="{{ asset('frontend/assets/js/color-switcher.js')}}"></script>

        <script>
            $(".dropdown-filter").on('click', function() {

                $(".explore__form-checkbox-list").toggleClass("filter-block");

            });

        </script>

        <script>
            $('.style1').owlCarousel({
                loop: true,
                margin: 10,
                autoplay: false,
                autoplayTimeout: 5000,
                responsive: {
                    0: {
                        items: 1
                    },
                    400: {
                        items: 1,
                        margin: 20
                    },
                    500: {
                        items: 1,
                        margin: 20
                    },
                    768: {
                        items: 1,
                        margin: 20
                    },
                    991: {
                        items: 1,
                        margin: 20
                    },
                    1000: {
                        items: 1,
                        margin: 20
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
                        items: 6,
                        margin: 20
                    }
                }
            });

        </script>

    </div>
    <!-- Wrapper / End -->
</body>
</html>
