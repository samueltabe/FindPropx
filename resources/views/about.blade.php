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
            <li class="breadcrumb-item"><a href="index.html"> <i class="fas fa-home"></i> </a></li>
            <li class="breadcrumb-item"> <i class="fas fa-chevron-right"></i> <a href="#">Pages</a></li>
            <li class="breadcrumb-item active"> <i class="fas fa-chevron-right"></i> <span> About us </span></li>
          </ol>
        </div>
      </div>
    </div>
  </div>
  <!--=================================
  breadcrumb -->

  <!--=================================
  about -->
  <section class="space-ptb bg-holder">
    <div class="container">
      <div class="row justify-content-center mb-5">
        <div class="col-lg-9">
          <div class="text-center">
            <h1 class="text-primary mb-4">Discover Your Dream Property with Findpropx</h1>
            <p class="px-sm-5 mb-4 lead fw-normal">
                Are you in search of the perfect property for buy, sale, rent, or
                perhaps a lucrative piece of land to invest in? Look no further!
                Findpropx is your one-stop destination for all your property marketing
                needs. We specialize in connecting individuals and organizations to the
                best real estate opportunities, ensuring a seamless and efficient
                experience for both buyers and sellers.
            </p>
            <div class="popup-video">
              <a class="popup-icon popup-youtube" href="https://youtube.com/shorts/2keGhCx4n_Q?si=YTltCZRWC2sQtzhc"> <i class="flaticon-play-button"></i> </a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2>Plenty of reasons to choose us</h2>
            <p>
                At Findpropx, we are passionate about simplifying the property buying,
                selling, and renting process. Our platform offers a user-friendly and
                intuitive interface, allowing you to easily navigate through a vast
                array of property listings. Whether you're a first-time homebuyer,
                a seasoned investor, or a property owner looking to market your assets,
                Findpropx has got you covered.
            </p>
          </div>
        </div>
      </div>
      <div class="row g-0">
        <div class="col-lg-3 col-sm-6">
          <div class="feature-info h-100">
            <div class="feature-info-icon">
              <i class="flaticon-like"></i>
            </div>
            <div class="feature-info-content">
              <h6 class="mb-3 feature-info-title">User-Friendly Interface</h6>
              <p class="mb-0">
                Our website is designed with simplicity in mind, making it
                easy for anyone to navigate and find their desired property.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="feature-info h-100">
            <div class="feature-info-icon">
              <i class="flaticon-agent"></i>
            </div>
            <div class="feature-info-content">
              <h6 class="mb-3 feature-info-title">Extensive Database</h6>
              <p class="mb-0">
                We curate a diverse range of properties and lands, ensuring that you
                have plenty of options to choose from.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="feature-info h-100">
            <div class="feature-info-icon">
              <i class="flaticon-like-1"></i>
            </div>
            <div class="feature-info-content">
              <h6 class="mb-3 feature-info-title">Secure Transactions</h6>
              <p class="mb-0">
                Findpropx employs advanced encryption and security measures to protect your personal and financial information.
              </p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="feature-info h-100">
            <div class="feature-info-icon">
              <i class="flaticon-house-1"></i>
            </div>
            <div class="feature-info-content">
              <h6 class="mb-3 feature-info-title">Efficient Support</h6>
              <p class="mb-0">
                Our dedicated customer support team is always ready to assist you with any inquiries or concerns you may have.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  about -->

  <!--=================================
  testimonial -->
  {{-- <section class="testimonial-main bg-holder" style="background-image: url(images/bg/02.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <div class="owl-carousel owl-dots-bottom-left" data-nav-dots="true" data-items="1" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1" data-space="0">
            <div class="item">
              <div class="testimonial">
                <div class="testimonial-content">
                  <p><i class="quotes">"</i>Thank you Martin for selling our apartment. We are delighted with the result. I can highly recommend Martin to anyone seeking a truly professional Realtor.</p>
                </div>
                <div class="testimonial-name">
                  <h6 class="text-primary mb-1">Lisa & Graeme</h6>
                  <span>Hamilton Rd. Willoughby</span>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="testimonial">
                <div class="testimonial-content">
                  <p><i class="quotes">"</i>Oliver always had a smile and was so quick to answer and get the job done.  I'll definitely suggest you to anyone we know who is selling or wanting to purchase a home. He is the best!</p>
                </div>
                <div class="testimonial-name">
                  <h6 class="text-primary mb-1">Jessica Alex</h6>
                  <span>West Division Street</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> --}}
  <!--=================================
  testimonial -->

  <!--=================================
  counter -->
  <section class="space-pt">
    <div class="container">
      <div class="border p-4">
        <div class="row">
          <div class="col-sm-3">
            <div class="counter counter-02 mb-4 mb-sm-0">
              <div class="counter-icon">
                <span class="pt-1 icon fab flaticon-placeholder"></span>
              </div>
              <div class="counter-content">
                <span class="timer mb-1" data-to="4561" data-speed="10000">4561</span>
                <label class="mb-0">Property locations</label>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="counter counter-02 mb-4 mb-sm-0">
              <div class="counter-icon">
                <span class="pt-1 icon fab flaticon-for-rent-1"></span>
              </div>
              <div class="counter-content">
                <span class="timer mb-1" data-to="1261" data-speed="10000">1261</span>
                <label class="mb-0">Property rent </label>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="counter counter-02 mb-4 mb-sm-0">
              <div class="counter-icon">
                <span class="pt-1 icon fab flaticon-house-5"></span>
              </div>
              <div class="counter-content">
                <span class="timer mb-1" data-to="2265" data-speed="10000">2265</span>
                <label class="mb-0">Property sell </label>
              </div>
            </div>
          </div>
          <div class="col-sm-3">
            <div class="counter counter-02 mb-4 mb-sm-0">
              <div class="counter-icon">
                <span class="pt-1 icon fab flaticon-agent"></span>
              </div>
              <div class="counter-content">
                <span class="timer mb-1" data-to="3265" data-speed="10000">3265</span>
                <label class="mb-0">Property agent</label>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  counter -->

  <!--=================================
  agent -->
  <section class="space-ptb">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="section-title text-center">
            <h2>Our Team</h2>
          </div>
        </div>
      </div>
      <div class="row g-0">
        <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
        <div class="agent text-center">
            <div class="agent-detail">
            <div class="agent-avatar avatar avatar-xllll">
                <img class="img-fluid rounded-circle" src="{{ asset("assets/images/teams/irene.jpg") }}" alt="">
            </div>
            <div class="agent-info">
                <h6 class="mb-0"> <a href="agent-detail.html">Irene O.Etugbo</a></h6>
                <span class="text-primary font-sm">Business Development Manager </span>
                <p class="mt-3 mb-0"></p>
            </div>
            </div>
            {{-- <div class="agent-button">
            <a class="btn btn-light d-grid" href="agent-detail.html">View Profile</a>
            </div> --}}
        </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
            <div class="agent text-center">
                <div class="agent-detail">
                    <div class="agent-avatar avatar avatar-xllll">
                    <img class="img-fluid rounded-circle" src="{{ asset("assets/images/teams/sam.jpg") }}" alt="">
                    </div>
                    <div class="agent-info">
                    <h6 class="mb-0"> <a href="agent-detail.html">Samuel Idowu</a></h6>
                    <span class="text-primary font-sm">Marketing & Comm. Manager </span>
                    <p class="mt-3 mb-0"></p>
                    </div>
                </div>
                {{-- <div class="agent-button">
                    <a class="btn btn-light d-grid" href="agent-detail.html">View Profile</a>
                </div> --}}
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
            <div class="agent text-center">
                <div class="agent-detail">
                    <div class="agent-avatar avatar avatar-xllll">
                    <img class="img-fluid rounded-circle" src="{{ asset("assets/images/teams/ike.jpg") }}" alt="">
                    </div>
                    <div class="agent-info">
                    <h6 class="mb-0"> <a href="agent-detail.html">Ike Chinyere. P.</a></h6>
                    <span class="text-primary font-sm">Relationship Manager</span>
                    <p class="mt-3 mb-0"></p>
                    </div>
                </div>
                {{-- <div class="agent-button">
                    <a class="btn btn-light d-grid" href="agent-detail.html">View Profile</a>
                </div> --}}
            </div>
        </div>
        <div class="col-lg-3 col-sm-6 mb-4 mb-sm-0">
            <div class="agent text-center">
                <div class="agent-detail">
                    <div class="agent-avatar avatar avatar-xllll">
                    <img class="img-fluid rounded-circle" src="{{ asset("assets/images/teams/samtabe.jpg") }}" alt="">
                    </div>
                    <div class="agent-info">
                    <h6 class="mb-0"> <a href="agent-detail.html">Samuel Tabe</a></h6>
                    <span class="text-primary font-sm">IT & Content Manager</span>
                    <p class="mt-3 mb-0"></p>
                    </div>
                </div>
                {{-- <div class="agent-button">
                    <a class="btn btn-light d-grid" href="agent-detail.html">View Profile</a>
                </div> --}}
            </div>
        </div>
      </div>
    </div>
  </section>
  <!--=================================
  agent -->


@endsection
