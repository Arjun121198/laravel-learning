@extends('layouts.master')
@section('title','form')
@section('content')
<main class="d-flex w-100">
    <div class="container d-flex flex-column">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
                <div class="d-table-cell align-middle">

                    <div class="text-center mt-4">
                        <h1 class="h2">User Details Form</h1>
                        </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <form id="" method="POST">
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input class="form-control form-control-lg" type="text" name="name" id="name" placeholder="Enter your name" />
                                        
                                        <div id="nameHelp" class="form-text"></div>
                                    </div>
                                    @error('name')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                                    <div class="mb-3">
                                        <label class="form-label">Father Name</label>
                                        <input class="form-control form-control-lg" type="text" name="father_name" id="father_name" placeholder="Enter your Father name" />
                                        <span class="text-danger">@error('father_name'){{ $message }} @enderror</span>
                                        <div id="nameHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mother Name</label>
                                        <input class="form-control form-control-lg" type="text" name="mother_name"id ="mother_name" placeholder="Enter your Mother name" />
                                        <span class="text-danger">@error('mother_name'){{ $message }} @enderror</span>
                                        <div id="nameHelp" class="form-text"></div>
                                    </div>
                                    <div class="loader" id="center"></div>
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <input class="form-control form-control-lg" type="tel" name="phone" id="phone" placeholder="Enter your name" />
                                        <span class="text-danger">@error('phone'){{ $message }} @enderror</span>
                                        <div id="nameHelp" class="form-text"></div>
                                    </div>									
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input class="form-control form-control-lg" type="email" name="email" id="email" placeholder="Enter your email" />
                                        <span class="text-danger">
                                        <div id="nameHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    @error('email')
                        <span style="color:red">{{$message}}</span>
                        @enderror
                                    <div class="mb-3">
                                        <label class="form-label">Home Address</label>
                                        <input class="form-control form-control-lg" type="text" name="home_address" id="home_address" placeholder="Enter your Address" />
                                        <span class="text-danger">@error('home_address'){{ $message }} @enderror</span>
                                        <div id="nameHelp" class="form-text"></div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="button" id="submit" class="btn btn-lg btn-primary">Add</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
@section('styles')
<style>
  #center {
  margin: auto;
  padding: 10px;
   }
.loader {
  border: 16px solid #f3f3f3;
  border-radius: 50%;
  border-top: 16px solid #3498db;
  width: 50px;
  height: 50px;
  -webkit-animation: spin 2s linear infinite; /* Safari */
  animation: spin 0.1s linear infinite;
}
/* Safari */
@-webkit-keyframes spin {
  0% { -webkit-transform: rotate(0deg); }
  100% { -webkit-transform: rotate(360deg); }
}

@keyframes spin {
  0% { transform: rotate(0deg); }
  100% { transform: rotate(360deg); }
}
</style>

@endsection
@section('scripts')
<script>
$(document).ready(function(){
    $(".loader").hide();
});
$("#submit").click(function(e)
{
    var name = $("#name").val();
    var father_name = $("#father_name").val();
    var mother_name = $("#mother_name").val();
    var phone = $("#phone").val();                
    var email = $("#email").val();
    var home_address = $("#home_address").val();
    var url = "{{ url('/')}}/create-customer";
       
    if(name == "" && father_name == "" && mother_name == "" && phone == "" && email == "" && home_address == "") 
    {
      $("#name").css("border-color",'red');
      $("#father_name").css("border-color",'red');
      $("#mother_name").css("border-color",'red');
      $("#phone").css("border-color",'red');
      $("#email").css("border-color",'red');
      $("#home_address").css("border-color",'red');
      $(document).ready(function(){
      $(".loader").hide();
      });
      e.preventDefault();
    }
    else
    {
      $("#name").css("border-color",'unset');
      $("#father_name").css("border-color",'unset');
      $("#mother_name").css("border-color",'unset');
      $("#phone").css("border-color",'unset');
      $("#email").css("border-color",'unset');
      $("#home_address").css("border-color",'unset');
    }
    if(name == null || name == "")
    {
      $("#name").css("border-color",'red');
      $(document).ready(function(){
      $(".loader").hide();
      });
      e.preventDefault();
    }
    else
    {
      $("#name").css("border-color",'unset');
    }
    if(father_name == null || father_name == "")
    {
      $("#father_name").css("border-color",'red');
      $(document).ready(function(){
      $(".loader").hide();
      });
      e.preventDefault();
    }
    else
    {
      $("#father_name").css("border-color",'unset');
    }
    if(mother_name == null || mother_name == "")
    {
      $("#mother_name").css("border-color",'red');
      $(document).ready(function(){
      $(".loader").hide();
      });
      e.preventDefault();
    }
    else
    {
      $("#mother_name").css("border-color",'unset');
    }
    if(phone == null || phone == "")
    {
      $("#phone").css("border-color",'red');
      $(document).ready(function(){
      $(".loader").hide();
      });
      e.preventDefault();
    }
    else
    {
      $("#phone").css("border-color",'unset');
    }
    if(email == null || email == "")
    {
      $("#email").css("border-color",'red');
      $(document).ready(function(){
      $(".loader").hide();
      });

      e.preventDefault();
    }
    else
    {
      $("#email").css("border-color",'unset');
    }
    if(home_address == null || home_address == "")
    {
      $("#home_address").css("border-color",'red');
      $(document).ready(function(){
      $(".loader").hide();
      });
      e.preventDefault();
    }
    else
    {
      $("#home_address").css("border-color",'unset');
    }

    $('.loader').show();
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
        }
    })
    $.ajax({
        url:url,
        type:'POST',
        data:{
          name:name,
          father_name:father_name,
          mother_name:mother_name,
          phone:phone,
          email:email,
          home_address:home_address
        },
        success:function(response)
        {
        window.location = "{{ url('/')}}/user";
        $(document).ready(function(){
        $(".loader").hide();
        });
        },
        error: function (error)
        {
        $(document).ready(function(){
        $(".loader").hide();
        });
         },

    });

});
</script>
@endsection