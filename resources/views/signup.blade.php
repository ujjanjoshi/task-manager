@extends('layouts.app')

<head>
    <title>SignUp</title>
    <link rel="stylesheet" href="{{ asset('storage/css/signup.css') }}">
</head>
@section('content')
<div class="container-fluid p-0 signup-body">
    <div class="signup-main-content">
        <div class=".container-md left-content">
            <img src="{{ url('../storage/image/signup-illus.png') }}" class="img-fluid float-start" alt="...">
        </div>
        <div class="container-md right-content">
            <div class="row mb-3 mt-3">
                <p class=" col signup-title">Sign Up</p>
                <div class="row mb-3">
                    <div class="input-group">
                        <span class="input-group-text no-bg"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control " placeholder="Enter First Name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="input-group">
                        <span class="input-group-text no-bg"><i class="bi bi-person"></i></span>
                        <input type="text" class="form-control" placeholder="Enter Last Name" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="input-group">
                        <span class="input-group-text no-bg"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control" placeholder="Enter Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-envelope-fill"></i></span>
                        <input type="text" class="form-control" placeholder="Enter Email" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
                        <input type="text" class="form-control" placeholder="Enter Password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="row mb-3 ">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock"></i></span>
                        <input type="text" class="form-control" placeholder="Confirm Password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
                <div class="row mb-4 ">
                    <div class="input-group">
                        <input class="form-check-input me-3" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            I agree to all terms
                        </label>
                    </div>
                </div>
                <div class="row mb-4 ">
                    <div class="input-group">
                    <button type="button" class="btn">Register</button>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="input-group">
                    <p class="col sign-in-link">Already have an account?<a href="/"> Sign in</a></p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>