<div class="modal login fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="loginModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header border-0">
          <h5 class="modal-title" id="loginModalLabel">Log in & Register</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <ul class="nav nav-tabs nav-tabs-02 justify-content-center" id="myTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="login-tab" data-bs-toggle="tab" href="#login" role="tab" aria-controls="login" aria-selected="false">Log in</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="register-tab" data-bs-toggle="tab" href="#register" role="tab" aria-controls="register" aria-selected="true">Register</a>
            </li>
          </ul>
          <div class="tab-content" id="myTabContent">
            <div class="tab-pane fade show active" id="login" role="tabpanel" aria-labelledby="login-tab">
              <form method="POST" action="{{ route('login') }}" class="row mt-4 mb-5 align-items-center">
                @csrf
                <div class="mb-3 col-sm-12">
                  <input class="form-control" placeholder="Email" type="email" name="email" :value="old('email')" onClick="this.select()" required autofocus>
                </div>
                <div class="mb-3 col-sm-12">
                  <input class="form-control" placeholder="Password" type="password" name="password" required autocomplete="current-password" onClick="this.select()">
                </div>
                <div class="col-sm-6 d-grid">
                  <button type="submit" class="btn btn-primary">Log In</button>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                    <div class="lost_password">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                  </ul>
                </div>
              </form>
              {{-- <div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded">
                <div class="mb-4 d-block text-center"><b class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</b></div>
                <form class="row">
                  <div class="col-sm-6">
                    <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f"></i>Login with Facebook</span></a>
                  </div>
                  <div class="col-sm-6">
                    <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter"></i>Login with Twitter</span></a>
                  </div>
                  <div class="col-sm-6">
                    <a class="btn google-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-google"></i>Login with Google</span></a>
                  </div>
                  <div class="col-sm-6">
                    <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in"></i>Login with Linkedin</span></a>
                  </div>
                </form>
              </div> --}}
            </div>
            <div class="tab-pane fade" id="register" role="tabpanel" aria-labelledby="register-tab">
              <form method="POST" action="{{ route('register') }}" class="row mt-4 mb-5 align-items-center">
                @csrf
                <div class="mb-3 col-sm-12">
                  <input class="form-control" placeholder="Your Names" name="name" :value="old('name')" required autofocus type="text" onClick="this.select()">
                </div>
                <div class="mb-3 col-sm-12">
                  <input class="form-control" placeholder="Email" type="email" name="email" :value="old('email')"  onClick="this.select()" required>
                </div>
                <div class="mb-3 col-sm-12">
                  <input class="form-control" placeholder="Password" type="password" name="password" autocomplete="new-password" onClick="this.select()" required>
                </div>
                <div class="mb-3 col-sm-12">
                  <input class="form-control" placeholder="Confirm Password" type="password" name="password_confirmation" autocomplete="new-password" onClick="this.select()" required>
                </div>
                <div class="col-sm-6 d-grid">
                  <button type="submit" class="btn btn-primary">Sign up</button>
                </div>
                <div class="col-sm-6">
                  <ul class="list-unstyled d-flex mb-1 mt-sm-0 mt-3">
                    <div class="lost_password">
                        @if (Route::has('password.request'))
                            <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                                {{ __('Forgot your password?') }}
                            </a>
                        @endif
                    </div>
                  </ul>
                </div>
              </form>
              {{-- <div class="login-social-media border ps-4 pe-4 pb-4 pt-0 rounded">
                <div class="mb-4 d-block text-center"><b class="bg-white ps-2 pe-2 mt-3 d-block">Login or Sign in with</b></div>
                <form class="row">
                  <div class="col-sm-6">
                    <a class="btn facebook-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-facebook-f"></i>Login with Facebook</span></a>
                  </div>
                  <div class="col-sm-6">
                    <a class="btn twitter-bg social-bg-hover d-block mb-3" href="#"><span><i class="fab fa-twitter"></i>Login with Twitter</span></a>
                  </div>
                  <div class="col-sm-6">
                    <a class="btn google-bg social-bg-hover d-block mb-3 mb-sm-0" href="#"><span><i class="fab fa-google"></i>Login with Google</span></a>
                  </div>
                  <div class="col-sm-6">
                    <a class="btn linkedin-bg social-bg-hover d-block" href="#"><span><i class="fab fa-linkedin-in"></i>Login with Linkedin</span></a>
                  </div>
                </form>
              </div> --}}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
