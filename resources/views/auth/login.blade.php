@extends('layouts.auth')

@section('title', 'Login')

@section('content')

<div class="about-header-area" style="background-image: url(build/img/bg/inner-header.png); background-repeat: no-repeat; background-size: cover; background-position: center;min-height: 100vh;">
    <img src="{{ URL::asset('build/img/elements/elements1.png') }}" alt="" class="elements1 aniamtion-key-1">
    <img src="{{ URL::asset('build/img/elements/star2.png') }}" alt="" class="star2 keyframe5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-10">
          <div class="about-inner-header heading9 ">
            <div class="card rounded-4 mb-0 border-top auth-card">
              <div class="card-body p-5">

                <div class="row">
                  <div class="col-lg-6">
                    <div class="d-flex align-items-center justify-content-center text-center mb-5">
                      <img src="{{ URL::asset('build/img/logo/logo4.png') }}" class="" alt="">
                    </div>
                    <img src="{{ URL::asset('build/img/all-images/about-img3.png') }}" alt="">
                  </div>
                  <div class="col-lg-6">
                    <div class="text-center mt-2">
                      <h4 class="fw-bold">Get Started Now</h4>
                      <p class="mb-5 text-dark">Enter your credentials to login your account</p>
                    </div>
                    <div class="form-body">
                      <div class="p-2 mt-4">
                      <form action="{{ route('login') }}" method="post">
                      @csrf
                          <div class="mb-3">
                            <label for="Email" class="form-label">Email</label>
                            <input type="text" id="Email" class="form-control auth-card @error('email') is-invalid @enderror" name="email" value="admin@gmail.com" placeholder="Enter Email">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                          </div>

                          <div class="mb-3">
                            <div class="float-end">
                              <a href="{{ route('password.request') }}" class="text-muted">Forgot password?</a>
                            </div>
                            <label class="form-label" for="password-input">Password</label>
                            <div class="input-group" id="show_hide_password">
                              <input type="password" class="form-control pe-5 password-input auth-card @error('password') is-invalid @enderror"
                                name="password" value="12345678"
                                placeholder="Enter password" id="inputChoosePassword">
                              <a href="javascript:;"
                                class="btn1 input-group-text bg-transparent auth-card"><i
                                  class="fa-solid fa-eye"></i></a>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                          </div>

                          <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }} 
                              id="auth-remember-check">
                            <label class="form-check-label" for="auth-remember-check">Remember me</label>
                          </div>

                          <div class="col-12 mb-3">
                            <div class="d-grid">
                              <button type="submit" class="btn1 auth-card">Login</button>
                            </div>
                          </div>
                          <div
                            class="separator section-padding mt-4 d-flex align-items-center justify-content-center">
                            <div class="line"></div>
                            <p class="mb-0 fw-bold text-uppercase text-dark">Or Sign in with</p>
                            <div class="line"></div>
                          </div>

                          <div class="d-flex gap-2 align-items-center justify-content-center mt-4">
                            <a href="javascript:;" class="btn1 auth-card social-icon">
                              <i class="fa-brands fa-google fs-5 text-dark"></i>
                            </a>
                            <a href="javascript:;" class="btn1 auth-card social-icon">
                              <i class="fa-brands fa-facebook fs-5 text-dark"></i>
                            </a>
                            <a href="javascript:;" class="btn1 auth-card social-icon">
                              <i class="fa-brands fa-linkedin fs-5 text-dark"></i>
                            </a>
                            <a href="javascript:;" class="btn1 auth-card social-icon">
                              <i class="fa-brands fa-github fs-5 text-dark"></i>
                            </a>
                          </div>
                          <div class="mt-4 text-center">
                            <p class="mb-0 text-dark">Don't have an account ? <a href="{{ route('register') }}"
                                class="fw-bold text-dark text-decoration"> Signup </a> </p>
                          </div>
                          </form>
                      </div>
                    </div>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@endsection