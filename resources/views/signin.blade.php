@extends('layouts.app')

<head>
    <title>SignIn</title>
    <link rel="stylesheet" href="{{ asset('storage/css/signin.css') }}">
</head>
@section('content')
<div class="container-fluid p-0 signin-body">
    <div class="signin-main-content">
        <div class=".container-md left-content">
            <div class="row mb-3 mt-3">
                <p class=" col signin-title">Sign In</p>
               
                
                <div class="row mb-3">
                    <div class="input-group">
                        <span class="input-group-text no-bg"><i class="bi bi-person-fill"></i></span>
                        <input type="text" class="form-control" placeholder="Enter Username" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>

                <div class="row mb-3 ">
                    <div class="input-group">
                        <span class="input-group-text" id="basic-addon1"><i class="bi bi-lock-fill"></i></span>
                        <input type="text" class="form-control" placeholder="Enter Password" aria-label="Username" aria-describedby="basic-addon1">
                    </div>
                </div>
        
                <div class="row mb-4 ">
                    <div class="input-group">
                        <input class="form-check-input me-3" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                            Remember Me
                        </label>
                    </div>
                </div>
                <div class="row mb-4 ">
                    <div class="input-group">
                        <button type="button" class="btn">Login</button>
                    </div>
                </div>
                <div class="row mb-3">
                    <div class="input-group">
                        <p class="col sign-in-thirdParty-link">Or, Login with 
                        <a href="#"><img src="{{ url('../storage/image/google.png') }}" class="img-fluid" alt="..."></a>
                        </p>
                        

                    </div>
                </div>
                <div class="row mb-3">
                    <div class="input-group">
                        <p class="col sign-up-link">Don't have an account?<a href="/signup"> Create One</a></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-md right-content">
            <img src="{{ url('../storage/image/signin-illus.png') }}" class="img-fluid float-start" alt="...">

        </div>

    </div>
</div>