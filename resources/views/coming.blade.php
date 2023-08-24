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

<section class="space-ptb bg-holder coming-soon " style="background-image: url(images/building.png);">
  <div class="container h-100">
    <div class="row justify-content-center h-100">
      <div class="col-lg-7 col-md-9 text-center align-self-center">
        <h1>Coming soon</h1>
        <p class="mb-4">We are currently working on our mobile apps.</p>
        <div class="countdown">
          <span class="theme-color days">00</span>
          <p class="days_ref">days</p>
        </div>
        <div class="countdown">
          <span class="theme-color hours">00</span>
          <p class="hours_ref">hours</p>
        </div>
        <div class="countdown">
          <span class="theme-color minutes">00</span>
          <p class="minutes_ref">minutes</p>
        </div>
        <div class="countdown">
          <span class="theme-color seconds">00</span>
          <p class="seconds_ref">seconds</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--=================================
coming-soon -->

@endsection
