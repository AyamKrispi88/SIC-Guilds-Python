<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Admin.MenuLaporan.DetailLaporan');
});

Route::get('/pakeman', function() {
    return view('User.PakemUser');
});

Route::get('/admin', function() {
    return view('Admin.HomePageAdmin');
});

Route::get('/user-login', function() {
    return view('User.login');
});

Route::get('/confirm', function() {
    return view('User.inbox-send');
});

Route::get('/password-changed', function() {
    return view('User.change-password');
});


