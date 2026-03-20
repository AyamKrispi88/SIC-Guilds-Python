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

Route::get('/user-login', function() {
    return view('User.login');
});

Route::get('/confirm', function() {
    return view('User.inbox-send');
});

Route::get('/password-changed', function() {
    return view('User.change-password');
});

Route::get('/menu-laporan', function() {
    return view('Admin.MenuLaporan.DetailLaporan');
});

Route::get('/list-buronan', function() {
    return view('User.BuronListUser');
});
Route::get('/login-admin', function() {
    return view('Admin.LoginAdmin');
});

Route::get('/admin-daftarLaporan', function() {
    return view('Admin.MenuLaporan.DaftarLaporan');
});

Route::get('/admin-daftarLaporan', function() {
    return view('Admin.MenuLaporan.DaftarLaporan');
});

Route::get('/admin-detailLaporan', function() {
    return view('Admin.MenuLaporan.DetailLaporan');
});
