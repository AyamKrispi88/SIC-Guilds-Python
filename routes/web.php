<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuronListUserController;
use App\Http\Controllers\BuronAdminController;
use App\Http\Controllers\daftarArtikelUserController;
use App\Http\Controllers\berandaUserController;


Route::get('/', [berandaUserController::class, 'index']);//ini beranda



//testing

Route::get('/tester', function () {
    return view('User.HomePageUser');//ini salah
});



//                                   USER                                                    //

//Pakem
Route::get('/pakeman', function() {
    return view('User.HomePageWeb');
});

Route::get('/pakemanA', function() {
    return view('User.pakemAkun');
});

//Login, Regist, Ganti pw, dan sejenisnya

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

//profile 

Route::get('/profile-user', function () {
    return view('User.profil');
});


//page user

Route::get('/Buatlaporan', function () {
    return view('User.page_isilaporan');
});

Route::get('/list-buronan', [BuronListUserController::class, 'index']);

Route::get('/daftarArtikelU', [daftarArtikelUserController::class, 'index']);

//page lainnya

Route::get('/detailBuronan', function () {
    return view('User.detailburonan');
});

Route::get('/detailLaporan', function () {
    return view('User.detaillaporan');
});

Route::get('/detailditemukan', function () {
    return view('User.detaillaporanditemukanburon');
});

Route::get('/notifikasiU', function () {
    return view('User.Notifikasi');
});

Route::get('/isiLaporanOrangHilangUser', function () {
    return view('User.page_isilaporanoranghilang');
});

Route::get('/laporan', function () {
    return view('User.page_laporan');
});




//                                                    Admin                                              //

//Menu Buronan 
Route::get('/Admin-detailburonan', function () {
    return view('Admin.MenuBuronan.DetailBuronan');
});

Route::get('/admin-postingburonan', function() {
    return view('Admin.MenuBuronan.UploadBuronan');
});

Route::get('/daftarBuronA', [BuronAdminController::class, 'index']);

Route::get('/admin-editBuronan', function() {
    return view('Admin.MenuBuronan.EditBuronan');
});

//Menu Laporan

Route::get('/adm-detaillaporan', function() {
    return view('Admin.MenuLaporan.DetailLaporan');
});

Route::get('/admin-daftarLaporan', function() {
    return view('Admin.MenuLaporan.DaftarLaporan');
});

Route::get('/admin-orangHilang', function() {
    return view('Admin.MenuLaporan.DetailLaporanOrhil');
});

//Menu Artikel

Route::get('/daftar-artikel', function() {
    return view('Admin.MenuArtikel.DaftarArtikel');
});

Route::get('/admin-detailArtikel', function() {
    return view('Admin.MenuArtikel.DetailArtikelAdmin');
});

Route::get('/admin-editArtikel', function() {
    return view('Admin.MenuArtikel.EditArtikel');
});

Route::get('/admin-postArtikel', function() {
    return view('Admin.MenuArtikel.PostingArtikelAdmin');
});

//Akun stuff

Route::get('/login-admin', function() {
    return view('Admin.LoginAdmin');
});

//profile 

Route::get('/profileadmin', function() {
    return view('Admin.ProfileAdmin');
});

//Page biasa
Route::get('/admin', function() {
    return view('Admin.HomePageAdmin');
});

Route::get('/notifikasiadmin', function() {
    return view('Admin.NotifikasiAdmin');
});













