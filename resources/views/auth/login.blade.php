@extends('layouts.header')
@include('layouts.nav')
@extends('layouts.app2')
@section('title',' الدخول')
@section('content')

<!-- Select Sign In OR Sign Up -->
<div class="buttons-container mx-auto mt-3" style="width:220px;">
    <ul>
      <li class="active"><a href="#" class="active-text"><i class="fa fa-sign-in-alt "></i></a></li>
      <li><a href="#"> <i class="fa fa-user-secret "></i></a></li>
    </ul>
  </div>

  <!-- Sign in -->
  <div class="container signinClass">
    <div class="row">
      <div class="col-sm-9 col-md-6 col-lg-4 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center mt-2">Welcome back!</h5>
            <form class="form-signin" method="POST" action="{{ route('login') }}">
            @csrf
               
                <div class="form-label-group text-center">
                    <input id="identify" type="text" class="form-control @error('identify') is-invalid @enderror" name="identify"  required  autofocus placeholder="Email or Phone">
                        @error('identify')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror 
                </div>
                <div class="form-label-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div class="custom-control custom-checkbox text-center mt-2 mb-2">
                    <input type="checkbox" class="custom-control-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="custom-control-label" for="remember">Remember Me</label>
                </div>

                <div class="text-center mb-4 forgetpassword">
                    @if (Route::has('password.request'))
                        <a class="" href="{{ route('password.request') }}"> 
                         {{ __('Forgot Your Password?') }} </a>
                    @endif
                </div>
                <button class="btn btn-lg btn-block text-uppercase submit-button mb-4" type="submit">Sign in</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
 
  <!-- Sign Up -->
  <div class="container d-none signupClass">
    <div class="row">
      <div class="col-sm-9 col-md-6 col-lg-4 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">{{ __('Register') }}</h5>
            <form class="form-signin" method="POST" action="{{ route('register') }}">
            @csrf
                <div class="form-label-group text-center">
                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" placeholder="Username" name="name"  required autocomplete="name" autofocus>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-label-group text-center">
                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="Email address"  name="email"  required autocomplete="email">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
        
                <div class="form-label-group text-center">
                <input id="mobile" type="mobile" class="form-control @error('mobile') is-invalid @enderror" placeholder="mobile "  name="mobile"  required >
                    @error('mobile')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="text-center mb-3 text-muted">
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="male" name="gender" class="custom-control-input" value="1">
                        <label class="custom-control-label" for="male">Male</label>
                    </div>
                    <div class="custom-control custom-radio custom-control-inline">
                        <input type="radio" id="female" name="gender" class="custom-control-input" value="0">
                        <label class="custom-control-label" for="female">Female</label>
                    </div>
                    <div>
                        <span class="invalid-feedback d-block" role="alert">
                            <strong></strong>
                        </span>
                    </div>
                </div>

                <div class="form-label-group text-center">
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" placeholder="Password" name="password" required autocomplete="new-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror  
                </div>

                <div class="form-label-group">
                    <input id="password-confirm" type="password" id="inputConfirmPassword" class="form-control" name="password_confirmation" placeholder="Confirm Password" required autocomplete="new-password">
                </div>
              <button class="btn btn-lg btn-block text-uppercase submit-button mb-4" type="submit">Register</button>
              <a href="{{url('redirect/facebook')}}" class="btn btn-lg btn-block text-uppercase submit-button mb-4" type="submit">Login With Facebook</a>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

@include('layouts.footerlink')
@include('layouts.footer')
@endsection