@extends('layouts.master')
@section('title','login')
@section('content')
<form action="loginuser" autocomplete="off" method="post" id="myForm">
  @csrf
  @if(Session::get('fail'))
<div class="alert alert-danger">
  {{ Session::get('fail') }}
</div>
  @endif
<section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
            alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
            <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
              <p class="lead fw-normal mb-0 me-3">Sign in with</p>
              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-facebook-f"></i>
              </button>

              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-twitter"></i>
              </button>

              <button type="button" class="btn btn-primary btn-floating mx-1">
                <i class="fab fa-linkedin-in"></i>
              </button>
            </div>

            <div class="divider d-flex align-items-center my-4">
              <p class="text-center fw-bold mx-3 mb-0"></p>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label" for="form3Example3">Email address</label>
              <input type="email" id="email" class="form-control form-control-lg"
                placeholder="Enter a valid email address" name="email" value="{{old('email')}}">
                <span class="text-danger">@error('email'){{ $message }} @enderror</span>
            </div>
            <!-- Password input -->
            <div class="form-outline mb-3">
              <label class="form-label" for="form3Example4">Password</label>
              <input type="password" id="password" class="form-control form-control-lg"
                placeholder="Enter password"name="password" value="{{old('password')}}">
                <span class="text-danger">@error('password'){{ $message }} @enderror</span>

            </div>
            <div class="d-flex justify-content-between align-items-center">
              <!-- Checkbox -->
              <div class="form-check mb-0">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                <label class="form-check-label" for="form2Example3">
                  Remember me
                </label>
              </div>
              <a href="resetpwd" class="text-body">Forgot password?</a>
            </div>
            <div class="text-center text-lg-start mt-4 pt-2">
            <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Login">  
              <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="register"
                  class="link-danger">Register</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="d-flex flex-column flex-md-row text-center text-md-start justify-content-between py-4 px-4 px-xl-5 bg-primary">
      <!-- Copyright -->
      <div class="text-white mb-3 mb-md-0">
        Copyright © 2020. All rights reserved.
      </div>
      <!-- Copyright -->

      <!-- Right -->
      <div>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-facebook-f"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-twitter"></i>
        </a>
        <a href="#!" class="text-white me-4">
          <i class="fab fa-google"></i>
        </a>
        <a href="#!" class="text-white">
          <i class="fab fa-linkedin-in"></i>
        </a>
      </div>
      <!-- Right -->
    </div>
  </section>
  <script>

</script>  
@endsection 

@section('scripts')
<script>
  $("#myForm").submit(function(e)
  {
    var email = $("#email").val();
    var password = $("#password").val();
    if(email == "" && password == "")
    {
      $("#email").css("border-color",'red');
      $("#password").css("border-color",'red');
      e.preventDefault();
    }
    else
    {
      $("#email").css("border-color",'unset');
      $("#password").css("border-color",'unset');
    }
    if(email == null || email == "")
    {
      $("#email").css("border-color",'red');
      e.preventDefault();
    }
    else
    {
      $("#email").css("border-color",'unset');
    }
    if(password ==null || password == "")
    {
      $("#password").css("border-color",'red');
      e.preventDefault();
    }
    else
    {
      $("#password").css("border-color",'unset');
    }

  });
</script>  
@endsection