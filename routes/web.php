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
    Route::post('/Buatlaporan', [LaporanBiasa::class, 'store'])->name('laporan.store');
    Route::get('/laporan', function () { return view('User.page_laporan'); });
    Route::get('/notifikasiU', function () { return view('User.Notifikasi'); });
    // Route untuk menampilkan halaman form edit
    Route::get('/laporan/edit/{id}', [App\Http\Controllers\LaporanBiasa::class, 'edit'])->name('laporan.edit');

    // Route untuk memproses penyimpanan data yang diedit (menggunakan PUT/POST)
    Route::put('/laporan/update/{id}', [App\Http\Controllers\LaporanBiasa::class, 'update'])->name('laporan.update');
    
    // Fitur Buronan & Artikel (User)
    Route::get('/list-buronan', [BuronListUserController::class, 'index']);
    Route::get('/detailBuronan', function () { return view('User.detailburonan'); });
    Route::get('/detailLaporan/{id}', [App\Http\Controllers\LaporanBiasa::class, 'preview'])->name('laporan.preview');;
    Route::get('/detailditemukan', function () { return view('User.detaillaporanditemukanburon'); });
    Route::get('/daftarArtikelU', [daftarArtikelUserController::class, 'index']);
    Route::get('/isiLaporanOrangHilangUser', function () { return view('User.page_isilaporanoranghilang'); });

    // Logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

//                      ADMIN                       //
// --- Page Biasa & Akun ---
Route::get('/admin', function() { return view('Admin.HomePageAdmin'); });
Route::get('/login-admin', function() { return view('Admin.LoginAdmin'); });
Route::get('/profileadmin', function() { return view('Admin.ProfileAdmin'); });
Route::get('/notifikasiadmin', function() { return view('Admin.NotifikasiAdmin'); });

// --- Menu Buronan ---
Route::get('/daftarBuronA', [BuronAdminController::class, 'index']);
Route::get('/Admin-detailburonan', function () { return view('Admin.MenuBuronan.DetailBuronan'); });
Route::get('/admin-postingburonan', function() { return view('Admin.MenuBuronan.UploadBuronan'); });
Route::get('/admin-editBuronan', function() { return view('Admin.MenuBuronan.EditBuronan'); });

// --- Menu Laporan ---
Route::get('/admin-daftarLaporan', function() { return view('Admin.MenuLaporan.DaftarLaporan'); });
Route::get('/adm-detaillaporan', function() { return view('Admin.MenuLaporan.DetailLaporan'); });
Route::get('/admin-orangHilang', function() { return view('Admin.MenuLaporan.DetailLaporanOrhil'); });

// --- Menu Artikel ---
Route::get('/daftar-artikel', function() { return view('Admin.MenuArtikel.DaftarArtikel'); });
Route::get('/admin-detailArtikel', function() { return view('Admin.MenuArtikel.DetailArtikelAdmin'); });
Route::get('/admin-postArtikel', function() { return view('Admin.MenuArtikel.PostingArtikelAdmin'); });
Route::get('/admin-editArtikel', function() { return view('Admin.MenuArtikel.EditArtikel'); });

//                  TESTING                 //
Route::get('/pakeman', function() { return view('User.HomePageWeb'); });
Route::get('/pakemanA', function() { return view('User.pakemAkun'); });
Route::get('/tester', function () { return view('User.HomePageUser'); });