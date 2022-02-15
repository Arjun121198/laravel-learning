@extends('layouts.master')
@section('title','createnewpassword')
@section('content')
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex align-items-center justify-content-center h-100">
      <div class="col-md-8 col-lg-7 col-xl-6">
        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg" class="img-fluid" alt="Phone image">
      </div>
      <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
        <form action="/createpasswordnew" method="post">
          <!-- Email input -->
          @csrf 
          <div class="form-outline mb-4">
          <label class="form-label" for="form1Example13">Enter your New Password</label>
            <input type="password" id="password" class="form-control form-control-lg" name="password"/>
          </div>
          <span id='message'></span>
          <div class="form-outline mb-4">
           <label class="form-label" for="form1Example13">Confirm your New Password</label>
            <input type="password" id="confirm_password" class="form-control form-control-lg" name="newpassword" onkeyup='check()';/>
          </div>
          
          <input type="hidden" name="id" value="{{$id}}">
          <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-md btn-block" >Submit</button>
        </form>
      </div>
    </div>
  </div>

</section>
<script>
var check = function() {
  if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
    document.getElementById('message').style.color = 'green';
    document.getElementById('message').innerHTML = 'Password is matching';
  } else {
    document.getElementById('message').style.color = 'red';
    document.getElementById('message').innerHTML = 'Password is not matching';
  }
}
</script>
@endsection 