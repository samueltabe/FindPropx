<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="keywords" content="Your Ultimate Property Market place" />
    <meta name="description" content="Your Ultimate Property Market place" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>{{ config('app.name', 'FindPropx') }} | Your Ultimate Property Market place</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('frontend/asset/images/icons/favicon.ico') }}" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Barlow+Semi+Condensed:300,500,600,700%7CRoboto:300,400,500,700">

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/font-awesome/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/flaticon/flaticon.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/bootstrap/bootstrap.min.css') }}" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/select2/select2.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/range-slider/ion.rangeSlider.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/owl-carousel/owl.carousel.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/magnific-popup/magnific-popup.css') }}" />

    <!-- Template Style -->
    <link rel="stylesheet" href="{{ asset('frontend/asset/css/style.css') }}" />

  </head>

<body>

    @yield('content')

<!--footer-->
@include('inc.frontend.footer')
<!--=================================
footer-->

<!--=================================
Javascript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- JS Global Compulsory (Do not remove)-->
<script src="{{ asset('frontend/asset/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('frontend/asset/js/popper/popper.min.js') }}"></script>
<script src="{{ asset('frontend/asset/js/bootstrap/bootstrap.min.js') }}"></script>

<!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
<script src="{{ asset('frontend/asset/js/jquery.appear.js') }}"></script>
<script src="{{ asset('frontend/asset/js/counter/jquery.countTo.js') }}"></script>
<script src="{{ asset('frontend/asset/js/select2/select2.full.js') }}"></script>
<script src="{{ asset('frontend/asset/js/range-slider/ion.rangeSlider.min.js') }}"></script>
<script src="{{ asset('frontend/asset/js/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('frontend/asset/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/asset/js/countdown/jquery.downCount.js') }}"></script>
<script src="{{ asset('frontend/asset/js/datetimepicker/moment.min.js') }}"></script>
<script src="{{ asset('frontend/asset/js/datetimepicker/datetimepicker.min.js') }}"></script>

<!-- Template Scripts (Do not remove)-->
<script src="{{ asset('frontend/asset/js/custom.js') }}"></script>


<script>
$(document).ready(function () {
    $('#typeFilters').change(function () {
        var selectedTypeId = $(this).val();
        var baseUrl = "{{ url('/list') }}";

        if (selectedTypeId) {
            window.location.href = baseUrl + '?state_id=' + selectedTypeId;
        } else  {
            window.location.href = baseUrl
        }
    });
    $('#typeFilterss').change(function () {
        var selectedTypeId = $(this).val();
        var baseUrl = "{{ url('/list') }}";

        if (selectedTypeId) {
            window.location.href = baseUrl + '?lga_id=' + selectedTypeId;
        } else  {
            window.location.href = baseUrl
        }
    });
    // $('#allTypesLink').click(function () {
    //     var baseUrl = "{{ url('/list') }}";
    //     window.location.href = baseUrl;
    // });

    $('#typeFilt').change(function () {
        var selectedTypeId = $(this).val();
        var baseUrl = "{{ url('/list') }}";

        if (selectedTypeId) {
            window.location.href = baseUrl + '?lga_id=' + selectedTypeId;
        } else  {
            window.location.href = baseUrl
        }
    });
    // $('#allTypesLink').click(function () {
    //     var baseUrl = "{{ url('/list') }}";
    //     window.location.href = baseUrl;
    // });

    $('#typeFiltre').change(function () {
        var selectedTypeId = $(this).val();
        var baseUrl = "{{ url('/list') }}";

        if (selectedTypeId) {
            window.location.href = baseUrl + '?lga_id=' + selectedTypeId;
        } else  {
            window.location.href = baseUrl
        }
    });
    // $('#allTypesLink').click(function () {
    //     var baseUrl = "{{ url('/list') }}";
    //     window.location.href = baseUrl;
    // });
});

window.addEventListener("load", function() {
    var video = document.getElementById("background-video");
    video.play().catch(function(error) {
    // Handle autoplay error, if any
    console.error("Autoplay failed:", error);
    });
});
</script>

</body>
</html>
