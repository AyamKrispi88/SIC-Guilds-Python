<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuronListUserController;
use App\Http\Controllers\BuronAdminController;
use App\Http\Controllers\daftarArtikelUserController;
use App\Http\Controllers\berandaUserController;

Route::get('/', function () {
    return view('Admin.MenuBuronan.DetailBuronan');
});

//testing

Route::get('/tester', function () {
    return view('Admin.ProfileAdmin');
});

//User
Route::get('/beranda', [berandaUserController::class, 'index']);

Route::get('/pakeman', function() {
    return view('User.PakemUser');
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

Route::get('/registrasi', function() {
    return view('User.registrasi');
});


Route::get('/newPassword', function() {
    return view('User.Password-Baru');
});

Route::get('/profile-user', function () {
    return view('User.profil');
});

Route::get('/laporan', function () {
    return view('User.laporan');
});

Route::get('/list-buronan', [BuronListUserController::class, 'index']);

Route::get('/pw', function() {
    return view('User.Password-Baru');
});

Route::get('/daftarArtikelU', [daftarArtikelUserController::class, 'index']);

//Admin 

Route::get('/menu-laporan', function() {
    return view('Admin.MenuLaporan.DetailLaporan');
});

Route::get('/login-admin', function() {
    return view('Admin.LoginAdmin');
});

Route::get('/admin-daftarLaporan', function() {
    return view('Admin.MenuLaporan.DaftarLaporan');
});


Route::get('/admin-orangHilang', function() {
    return view('Admin.MenuLaporan.DetailLaporanOrhil');
});


Route::get('/admin', function() {
    return view('Admin.HomePageAdmin');
});

Route::get('/daftar-artikel', function() {
    return view('Admin.MenuArtikel.DaftarArtikel');
});

Route::get('/daftarBuronA', [BuronAdminController::class, 'index']);


Route::get('/profileadmin', function() {
    return view('Admin.ProfileAdmin');
});

Route::get('/notifikasiadmin', function() {
    return view('Admin.NotifikasiAdmin');
});

Route::get('/admin-postingaratikel', function() {
    return view('Admin.MenuArtikel.PostingArtikelAdmin');
});

Route::get('/admin-postingburonan', function() {
    return view('Admin.MenuBuronan.UploadBuronan');
});



