@extends('layouts.master')
@section('title','resetpwd')
@section('content')
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="search" method="post">
          <!-- Email input -->
          @csrf 
          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example13">Enter your Email address</label>
            <input type="email" id="form1Example13" class="form-control form-control-lg" name="email" />
          </div>
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-md btn-block">Submit</button>
        </form>
      </div>
    </div>
  </div>
</section>
@endsection 