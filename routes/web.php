<?php

use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BuronListUserController;
use App\Http\Controllers\BuronAdminController;
use App\Http\Controllers\daftarArtikelUserController;
use App\Http\Controllers\berandaUserController;
use App\Http\Controllers\LaporanBiasa;
use App\Http\Controllers\AuthController;

//                      GUEST                   //
Route::middleware('guest')->group(function () {
    // Halaman utama login
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    // Proses login (POST) diarahkan ke '/' sesuai form action kamu
    Route::post('/', [AuthController::class, 'authenticate'])->name('login.store');

    // Registrasi
    Route::get('/registrasi', [AuthController::class, 'showRegisterForm'])->name('register.index');
    Route::post('/register', [AuthController::class, 'register'])->name('register.store');

    // Halaman pendukung lainnya (sebelum login)
    Route::get('/confirm', function() { return view('User.inbox-send'); });
    Route::get('/newPassword', function() { return view('User.Password-Baru'); });
});

//                      AFTERLOGIN              //
Route::middleware('auth')->group(function () {
    
    // Beranda User (Halaman tujuan setelah login)
    Route::get('/beranda', [berandaUserController::class, 'index'])->name('beranda');

    // Fitur User
    Route::get('/profile-user', function () { return view('User.profil'); });
    Route::get('/Buatlaporan', [LaporanBiasa::class, 'index']);
    Route::post('/Buatlaporan', [LaporanBiasa::class, 'store']);
    Route::get('/laporan', function () { return view('User.page_laporan'); });
    Route::get('/notifikasiU', function () { return view('User.Notifikasi'); });
    
    // Fitur Buronan & Artikel (User)
    Route::get('/list-buronan', [BuronListUserController::class, 'index']);
    Route::get('/detailBuronan', function () { return view('User.detailburonan'); });
    Route::get('/detailLaporan', function () { return view('User.detaillaporan'); });
    Route::get('/detailditemukan', function () { return view('User.detaillaporanditemukanburon'); });
    Route::get('/daftarArtikelU', [daftarArtikelUserController::class, 'index']);
    Route::get('/isiLaporanOrangHilangUser', function () { return view('User.page_isilaporanoranghilang'); });

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//                      ADMIN                       //
Route::prefix('admin-panel')->group(function () {
    Route::get('/', function() { return view('Admin.HomePageAdmin'); });
    Route::get('/profile', function() { return view('Admin.ProfileAdmin'); });
    Route::get('/notifikasi', function() { return view('Admin.NotifikasiAdmin'); });

    // Admin - Menu Buronan
    Route::get('/daftar-buron', [BuronAdminController::class, 'index']);
    Route::get('/detail-buron', function () { return view('Admin.MenuBuronan.DetailBuronan'); });
    Route::get('/upload-buron', function() { return view('Admin.MenuBuronan.UploadBuronan'); });
    Route::get('/edit-buron', function() { return view('Admin.MenuBuronan.EditBuronan'); });

    // Admin - Menu Laporan
    Route::get('/daftar-laporan', function() { return view('Admin.MenuLaporan.DaftarLaporan'); });
    Route::get('/detail-laporan', function() { return view('Admin.MenuLaporan.DetailLaporan'); });
    Route::get('/detail-orang-hilang', function() { return view('Admin.MenuLaporan.DetailLaporanOrhil'); });

    // Admin - Menu Artikel
    Route::get('/daftar-artikel', function() { return view('Admin.MenuArtikel.DaftarArtikel'); });
    Route::get('/post-artikel', function() { return view('Admin.MenuArtikel.PostingArtikelAdmin'); });
});

//                  TESTING                 //
Route::get('/pakeman', function() { return view('User.HomePageWeb'); });
Route::get('/pakemanA', function() { return view('User.pakemAkun'); });
Route::get('/tester', function () { return view('User.HomePageUser'); });