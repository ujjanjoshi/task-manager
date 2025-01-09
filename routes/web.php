<?php

use Illuminate\Support\Facades\Route;

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/',function(){
    return view('signin');
});