<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LaporanBiasa extends Controller
{
    // Menampilkan form
    public function create()
    {
        return view('User.page_isilaporan'); // Sesuaikan dengan lokasi file blade kamu
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'jenis_laporan'      => 'required|in:Kepadatan Lalu Lintas,Kasus Kriminal,Orang Hilang',
            'tanggal_kejadian'   => 'required|date',
            'lokasi_kejadian'    => 'required|string|max:255',
            'deskripsi_kejadian' => 'required|string',
            'foto_kejadian'      => 'required|image|mimes:jpeg,png,jpg|max:2048', // Maksimal 2MB
        ]);

        if ($request->hasFile('foto_kejadian')) {
            $path = $request->file('foto_kejadian')->store('foto_laporan', 'public');
            $validatedData['foto_kejadian'] = $path; 
        }

        $validatedData['user_id'] = Auth::id();

        LaporanBiasa::create($validatedData);

        return redirect()->back()->with('success', 'Laporan berhasil dikirim dan menunggu proses admin!');
    }
}
