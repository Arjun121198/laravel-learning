@extends('layouts.master')
@section('title','register')
@section('content')
<form action="registeruser" id="myForm" method="post">
  @csrf 
<section class="vh-100" style="background-color: #eee;">
    <div class="container h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-lg-12 col-xl-11">
          <div class="card text-black" style="border-radius: 25px;">
            <div class="card-body p-md-5">
              <div class="row justify-content-center">
                <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
                  <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Register</p>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example1c">Your Name</label>
                        <input type="text" id="name" class="form-control" name="name"/>
                        <span class="text-danger">@error('name'){{ $message }} @enderror</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example3c">Your Email</label>
                        <input type="email" id="email" class="form-control" name="email"/>
                        <span class="text-danger">@error('email'){{ $message }} @enderror</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center mb-4">
                      <div class="form-outline flex-fill mb-0">
                        <label class="form-label" for="form3Example4c">Password</label>
                        <input type="password" id="password" class="form-control" name="password"/>
                        <span class="text-danger">@error('password'){{ $message }} @enderror</span>
                      </div>
                    </div>
                      <div class="form-check d-flex justify-content-center mb-5">
                      <input
                        class="form-check-input me-2"
                        type="checkbox"
                        value=""
                        id="form2Example3c"
                      />
                      <label class="form-check-label" for="form2Example3">
                        I agree all statements in <a href="#!">Terms of service</a>
                      </label>
                    </div>
                    <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <input type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;" value="Register">  
                    </div>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Already have an account? <a href="login"
                      class="link-danger">Login</a></p>
    
                </div>
                <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
                  <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-registration/draw1.webp" class="img-fluid" alt="Sample image">
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</form>
@endsection 


@section('scripts')
<script>
  $("#myForm").submit(function(e)
  {
    var name = $("#name").val();
    var email = $("#email").val();
    var password = $("#password").val();
    if(email == "" && password == "" && name == "")
    {
      $("#name").css("border-color",'red');
      $("#email").css("border-color",'red');
      $("#password").css("border-color",'red');
      e.preventDefault();
    }
    else
    {
      $("#name").css("border-color",'unset');
      $("#email").css("border-color",'unset');
      $("#password").css("border-color",'unset');
    }
    if(name == null || name == "")
    {
      $("#email").css("border-color",'red');
      e.preventDefault();
    }
    else
    {
      $("#email").css("border-color",'unset');
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