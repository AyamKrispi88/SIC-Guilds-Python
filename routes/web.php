<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('User.HomePageUser');
});

Route::get('/pakeman', function() {
    return view('User.PakemUser');
});

Route::get('/admin', function() {
    return view('Admin.HomePageAdmin');
});

