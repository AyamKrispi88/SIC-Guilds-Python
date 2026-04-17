<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('User.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'login'    => ['required', 'string'],
            'NIK'      => ['required', 'string'], 
            'password' => ['required'],
    ]);

    $fieldType = filter_var($request->login, FILTER_VALIDATE_EMAIL) ? 'email' : 'username';

    $credentials = [
        $fieldType  => $request->login,
        'NIK'       => $request->NIK,
        'password'  => $request->password,
    ];

    if (Auth::attempt($credentials)) {
        $request->session()->regenerate();

        return redirect('/beranda')->with('success', 'Berhasil login!');
    }

    return back()->withErrors([
        'login' => 'Kombinasi Login, NIK, atau Password salah.',
    ])->onlyInput('login', 'NIK');
}

// Menampilkan form registrasi
    public function showRegisterForm()
    {
        return view('User.registrasi'); // Pastikan nanti buat file register.blade.php
    }

    // Memproses data registrasi
    public function register(Request $request)
    {
        // 1. Validasi Input
        // Pastikan username, email, dan NIK bersifat unik (belum dipakai orang lain)
        $validatedData = $request->validate([
            'nama_lengkap'  => 'required|string|max:255',
            'username'      => 'required|string|max:255|unique:users,username',
            'email'         => 'required|email|max:255|unique:users,email',
            'NIK'           => 'required|string|unique:users,NIK', 
            'tempat_tanggal_lahir'  => 'required|string|max:255',
            'password'      => 'required|min:6',
            'foto_profil'   => 'nullable|image|mimes:jpeg,png,jpg|max:2048', // Maksimal 2MB
        ]);

        // Proses Upload Foto
    if ($request->hasFile('foto_profil')) {
        // Simpan file ke folder storage/app/public/profil
        $path = $request->file('foto_profil')->store('profil', 'public');
        // Simpan nama path-nya ke array untuk dimasukkan ke DB
        $validatedData['foto_profil'] = $path;
    }

        // 2. Hash Password (DI SINI TEMPAT YANG BENAR!)
        $validatedData['password'] = Hash::make($validatedData['password']);

        $validatedData['role'] = false; // Set role default sebagai user biasa

        // 3. Simpan ke Database
        User::create($validatedData);

        // 4. Arahkan ke halaman login dengan pesan sukses
        return redirect()->route('login')->with('success', 'Registrasi berhasil! Silakan login.');
    }

    public function index()
{
    return view('User.login'); // Pastikan kamu punya file resources/views/login.blade.php
}

public function logout(Request $request)
{
    Auth::logout();
    
    $request->session()->invalidate();
    $request->session()->regenerateToken();
    
    return redirect()->route('login')->with('success', 'Berhasil logout!');
}

}