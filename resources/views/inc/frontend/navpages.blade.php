

<div class="topbar">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div class="d-block d-md-flex align-items-center text-center">
            <div class="me-3 d-inline-block">
              <a href="tel:+2349128547751"><i class="fa fa-phone me-2 fa fa-flip-horizontal"></i>+234 912 854 7751 </a>
            </div>
            <div class="me-auto d-inline-block">
              <span class="me-2 text-white">Get App:</span>
              <a class="pe-1" href="{{ url('/coming') }}"><i class="fab fa-android"></i></a>
              <a href="{{ url('/coming') }}"><i class="fab fa-apple"></i></a>
            </div>
            {{-- <div class="dropdown d-inline-block ps-2 ps-md-0">
              <a class="dropdown-toggle" href="#" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Choose location<i class="fas fa-chevron-down ps-2"></i>
              </a>
              <div class="dropdown-menu mt-0" aria-labelledby="dropdownMenuButton">
                <a class="dropdown-item" href="#">Global</a>
                <a class="dropdown-item" href="#">Arizona</a>
                <a class="dropdown-item" href="#">British columbia</a>
                <a class="dropdown-item" href="#">Commercial</a>
              </div>
            </div> --}}
            <div class="social d-inline-block">
              <ul class="list-unstyled">
                <li><a href="#"> <i class="fab fa-facebook-f"></i> </a></li>
                <li><a href="#"> <i class="fab fa-twitter"></i> </a></li>
                <li><a href="#"> <i class="fab fa-linkedin"></i> </a></li>
                <li><a href="#"> <i class="fab fa-pinterest"></i> </a></li>
                <li><a href="#"> <i class="fab fa-instagram"></i> </a></li>
              </ul>
            </div>
            {{-- <div class="login d-inline-block">
                <a data-bs-toggle="modal" data-bs-target="#loginModal" href="#">Hello sign in<i class="fa fa-user ps-2"></i></a>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>
<nav class="navbar navbar-light bg-white navbar-static-top navbar-expand-lg header-sticky">
    <div class="container-fluid">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="img-fluid"  src="{{ asset('frontend/asset/images/logo2.png') }}"  alt="logo">
        </a>
        <div class="navbar-collapse collapse justify-content-center">
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown @if(Request::is('index')) active @endif">
                    <a class="nav-link" href="{{ url('/') }}" aria-haspopup="true" aria-expanded="false">Home</a>
                </li>
                <li class="dropdown nav-item @if(Request::is('about')) active @endif">
                    <a href="{{ url('/about') }}" class="nav-link">About Us</a>
                </li>
                <li class="dropdown nav-item @if(Request::is('list')) active @endif">
                    <a href="{{ url('/list') }}" class="nav-link @if(Request::is('list')) active @endif">All Properties</a>
                </li>
                <li class="dropdown nav-item @if(Request::is('service')) active @endif">
                    <a href="{{ url('/service') }}" class="nav-link @if(Request::is('service')) active @endif">Services</a>
                </li>
                <li class="dropdown nav-item @if(Request::is('contact')) active @endif">
                    <a href="{{ url('/contact') }}" class="nav-link @if(Request::is('contact')) active @endif">Contact Us</a>
                </li>
            </ul>
        </div>
    <div class="add-listing d-none d-sm-block">
      <a data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-primary btn-md" href="#">Join in !<i class="fa fa-user ps-2"></i></a>
    </div>
    </div>
</nav>

