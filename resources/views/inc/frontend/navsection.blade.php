<nav class="navbar navbar-dark navbar-static-top navbar-expand-lg header-sticky">
    <div class="container-fluid">
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">☰</button>
        <a class="navbar-brand" href="{{ url('/') }}">
            <img class="img-fluid" src="{{ asset('frontend/asset/images/logowhite.png') }}" alt="logo">
        </a>
        <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <li class="nav-item dropdown active">
                    <a class="nav-link" href="{{url('/')}}" aria-haspopup="true" aria-expanded="false">Home</a>
                </li>
                <li class="dropdown nav-item">
                    <a href="{{url('/about')}}" class="nav-link">About Us</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="{{ url('/list') }}" aria-haspopup="true" aria-expanded="false">
                        All Properties
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="{{ url('/service') }}" aria-haspopup="true" aria-expanded="false">
                        Services
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link " href="{{ url('/contact') }}" aria-haspopup="true" aria-expanded="false">
                        Contact Us
                    </a>
                </li>
            </ul>
        </div>
        <div class="d-flex align-items-center">
            <div class="call me-4">
                {{-- <a href="tel:1-800-555-1234"><i class="fa fa-phone me-2 fa-flip-horizontal"></i>1-800-555-1234 </a> --}}
            </div>
            <div class="login me-4">
                {{-- <a data-bs-toggle="modal" data-bs-target="#loginModal" href="#">Hello sign in<i class="fa fa-user ps-2"></i></a> --}}
            </div>
            <div class="add-listing">
                <a data-bs-toggle="modal" data-bs-target="#loginModal" class="btn btn-primary btn-md" href="#">Join in !<i class="fa fa-user ps-2"></i></a>
            </div>
        </div>
    </div>
</nav>
