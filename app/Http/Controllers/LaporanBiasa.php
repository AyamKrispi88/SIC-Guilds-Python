<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\LaporanBiasa as ModelLaporan;

class LaporanBiasa extends Controller
{
    // Menampilkan form
    public function create()
    {
        return view('User.page_isilaporan');
    }

    public function index()
    {
        return view('User.page_isilaporan'); 
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

        // 1. Simpan data yang baru dibuat ke dalam variabel $laporanBaru
        $laporanBaru = ModelLaporan::create($validatedData);

        // 2. Redirect halaman ke route 'laporan.preview' sambil membawa ID laporan tersebut
        return redirect()->route('laporan.preview', ['id' => $laporanBaru->id])
                         ->with('success', 'Laporan berhasil dikirim dan menunggu proses admin!');
    }

    // 3. Fungsi baru untuk menampilkan halaman preview
    public function preview($id)
    {
        // Cari laporan di database berdasarkan ID yang dikirim dari URL
        // findOrFail akan otomatis menampilkan error 404 jika ID tidak ditemukan
        $laporan = ModelLaporan::findOrFail($id);

        // Keamanan tambahan: Pastikan user hanya bisa melihat preview laporannya sendiri
        if ($laporan->user_id !== Auth::id()) {
            abort(403, 'Anda tidak memiliki izin untuk melihat laporan ini.');
        }

        // Tampilkan view preview dan kirimkan data laporannya
        return view('User.detaillaporan', compact('laporan'));
    }

    // Menampilkan halaman form edit
    public function edit($id)
    {
        $laporan = ModelLaporan::findOrFail($id);

        // Keamanan: Pastikan hanya pembuat laporan yang bisa edit
        if ($laporan->user_id !== Auth::id()) {
            abort(403, 'Anda tidak memiliki izin untuk mengedit laporan ini.');
        }

        return view('User.page_editlaporan', compact('laporan'));
    }

    // Menyimpan perubahan ke database
    public function update(Request $request, $id)
    {
        $laporan = ModelLaporan::findOrFail($id);

        if ($laporan->user_id !== Auth::id()) {
            abort(403, 'Anda tidak memiliki izin.');
        }

        // Validasi data baru. Perhatikan: 'foto_kejadian' sekarang 'nullable' (tidak wajib diisi) 
        // karena user mungkin hanya ingin mengedit teks tanpa mengganti foto.
        $validatedData = $request->validate([
            'jenis_laporan'      => 'required|in:Kepadatan Lalu Lintas,Kasus Kriminal,Orang Hilang',
            'tanggal_kejadian'   => 'required|date',
            'lokasi_kejadian'    => 'required|string|max:255',
            'deskripsi_kejadian' => 'required|string',
            'foto_kejadian'      => 'nullable|image|mimes:jpeg,png,jpg|max:2048', 
        ]);

        // Cek apakah user mengupload foto baru
        if ($request->hasFile('foto_kejadian')) {
            $path = $request->file('foto_kejadian')->store('foto_laporan', 'public');
            $validatedData['foto_kejadian'] = $path; 
        }

        // Update data ke database
        $laporan->update($validatedData);

        // Kembalikan ke halaman preview setelah berhasil diedit
        return redirect()->route('laporan.preview', $laporan->id)
                         ->with('success', 'Laporan berhasil diperbarui!');
    }
}
