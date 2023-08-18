<div id="header">
    <div class="container container-header">
        <!-- Left Side Content -->
        <div class="left-side ml-5">
            <!-- Logo -->
            <div id="logo">
                <a href="{{url('/')}}"><img src="{{asset('frontend/assets/images/logo.png')}}" alt=""></a>
            </div>
            <!-- Mobile Navigation -->
            <div class="mmenu-trigger">
                <button class="hamburger hamburger--collapse" type="button">
                    <span class="hamburger-box">
                <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
            <!-- Main Navigation -->
            <nav id="navigation" class="style-1">
                <ul id="responsive">
                    <li><a href="{{ url('/') }}">Home</a></li>
                    <li><a href="{{ url('/list') }}">View Properties</a>
                        {{-- <ul>
                            <li><a href="{{ url('/list') }}">Listing Grid</a></li>
                            <li><a href="{{ url('/list2') }}">Listing List</a></li>
                        </ul> --}}
                    <li><a href="{{url('/about')}}">About Us</a></li>
                    <li><a href="{{url('/contact')}}">Contact</a></li>
                </ul>
            </nav>
            <!-- Main Navigation / End -->
        </div>
        <!-- Right Side Content / End -->
        {{-- <div class="right-side d-none d-none d-lg-none d-xl-flex">
            <!-- Header Widget -->
            <div class="header-widget">
                <a href="add-property.html" class="button border">Add Listing<i class="fas fa-laptop-house ml-2"></i></a>
            </div>
            <!-- Header Widget / End -->
        </div> --}}
        <!-- Right Side Content / End -->

        <!-- Right Side Content / End -->
        <div class="header-user-menu user-menu">
            <div class="header-user-name">
                Join Now!
            </div>
            <ul>
                <li class="show-reg-form modal-open"><a href="#"> Sell Property</a></li>
                <li class="show-reg-form modal-open"><a href="#"> Rent Property</a></li>
            </ul>
        </div>
        <!-- Right Side Content / End -->

        {{-- <div class="right-side d-none d-none d-lg-none d-xl-flex sign ml-0">
            <!-- Header Widget -->
            <div class="header-widget sign-in">
                <div class="show-reg-form modal-open"><a href="#">Sign In</a></div>
            </div>
            <!-- Header Widget / End -->
        </div> --}}
        <!-- Right Side Content / End -->

        <!-- lang-wrap-->
        {{-- <div class="header-user-menu user-menu add d-none d-lg-none d-xl-flex">
            <div class="lang-wrap">
                <div class="show-lang"><span><i class="fas fa-globe-americas"></i><strong>ENG</strong></span><i class="fa fa-caret-down arrlan"></i></div>
                <ul class="lang-tooltip lang-action no-list-style">
                    <li><a href="#" class="current-lan" data-lantext="En">English</a></li>
                    <li><a href="#" data-lantext="Fr">Francais</a></li>
                    <li><a href="#" data-lantext="Es">Espanol</a></li>
                    <li><a href="#" data-lantext="De">Deutsch</a></li>
                </ul>
            </div>
        </div> --}}
        <!-- lang-wrap end-->

    </div>
</div>

<!--register form -->
<div class="login-and-register-form modal">
    <div class="main-overlay"></div>
    <div class="main-register-holder">
        <div class="main-register fl-wrap">
            <div class="close-reg"><i class="fa fa-times"></i></div>
            <h3>Welcome to <span>Find<strong>Propx</strong></span></h3>
            <div class="container">
                <p class="tabs-menu">Whether you're looking to buy, sell, or rent a property, or seeking an excellent
                    land investment opportunity, Findpropx is here to transform your property
                    search experience. Join us today and unlock the door to your dream property!
                </p>
            </div>
            {{-- <div class="soc-log fl-wrap">
                <p>Login</p>
                <a href="#" class="facebook-log"><i class="fa fa-facebook-official"></i>Log in with Facebook</a>
                <a href="#" class="twitter-log"><i class="fa fa-twitter"></i> Log in with Twitter</a>
            </div>
            <div class="log-separator fl-wrap"><span>Or</span></div> --}}
            <div id="tabs-container">
                <ul class="tabs-menu">
                    <li class="current"><a href="#tab-1">Login</a></li>
                    <li><a href="#tab-2">Register</a></li>
                </ul>
                <div class="tab">
                    <div id="tab-1" class="tab-contents">
                        <div class="custom-form">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <label>Email Address</label>
                                <input type="email" name="email" :value="old('email')" onClick="this.select()" required autofocus>
                                <label>Password</label>
                                <input type="password" name="password" required autocomplete="current-password" onClick="this.select()">
                                <button type="submit" class="log-submit-btn"><span>Log In</span></button>
                                <div class="clearfix"></div>
                                <div class="filter-tags">
                                    <input id="check-a" type="checkbox" name="remember">
                                    <label for="check-a">Remember me</label>
                                </div>
                            </form>
                            <div class="lost_password">
                                @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="tab">
                        <div id="tab-2" class="tab-contents">
                            <div class="custom-form">
                                <form method="POST" action="{{ route('register') }}" name="registerform" class="main-register-form" id="main-register-form2">
                                    @csrf
                                    <label>Names </label>
                                    <input name="name" :value="old('name')" required autofocus type="text" onClick="this.select()">
                                    <label>Email Address </label>
                                    <input type="email" name="email" :value="old('email')"  onClick="this.select()" required>
                                    <label>Password</label>
                                    <input type="password" name="password" autocomplete="new-password" onClick="this.select()" required>
                                    <label>Confirm Password</label>
                                    <input type="password" name="password_confirmation" autocomplete="new-password" onClick="this.select()" required>
                                    <button type="submit" class="log-submit-btn"><span>Register</span></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--register form end -->

