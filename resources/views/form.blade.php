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
                                <form action="formin"  method="POST">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Name</label>
                                        <input class="form-control form-control-lg" type="text" name="name" placeholder="Enter your name" />
                                        <div id="nameHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Father Name</label>
                                        <input class="form-control form-control-lg" type="text" name="father_name" placeholder="Enter your Father name" />
                                        <div id="nameHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Mother Name</label>
                                        <input class="form-control form-control-lg" type="text" name="mother_name" placeholder="Enter your Mother name" />
                                        <div id="nameHelp" class="form-text"></div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Phone Number</label>
                                        <input class="form-control form-control-lg" type="tel" name="phone" placeholder="Enter your name" />
                                        <div id="nameHelp" class="form-text"></div>
                                    </div>									
                                    <div class="mb-3">
                                        <label class="form-label">Email Address</label>
                                        <input class="form-control form-control-lg" type="email" name="email" placeholder="Enter your email" />
                                        <div id="nameHelp" class="form-text">We'll never share your email with anyone else.</div>
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Home Address</label>
                                        <input class="form-control form-control-lg" type="text" name="home_address" placeholder="Enter your Address" />
                                        <div id="nameHelp" class="form-text"></div>
                                    </div>
                                    <div class="text-center mt-3">
                                        <button type="submit" class="btn btn-lg btn-primary">Add</button>
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