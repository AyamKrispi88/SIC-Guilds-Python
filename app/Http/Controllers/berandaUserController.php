<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class berandaUserController extends Controller
{
    public function index()
    {
         $artikel = [
            ['img' => 'assets/patungmacan.png', 'title' => 'Kepadatan Lalu Lintas Pada Hari Raya Lebaran Meningkat Signifikan', 'content' => 'Terjadi tindak kriminal di jalan patung macan, indonesia. Dikabarkan tidak ada korban jiwa. Tersangka sudah ditangkap oleh polisi', 'author' => 'Gungyuda', 'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'],
            ['img' => 'assets/patungmacan.png', 'title' => 'Kepadatan Lalu Lintas Pada Hari Raya Lebaran Meningkat Signifikan', 'content' => 'Terjadi tindak kriminal di jalan patung macan, indonesia. Dikabarkan tidak ada korban jiwa. Tersangka sudah ditangkap oleh polisi', 'author' => 'Gungyuda', 'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'],
            ['img' => 'assets/patungmacan.png', 'title' => 'Kepadatan Lalu Lintas Pada Hari Raya Lebaran Meningkat Signifikan', 'content' => 'Terjadi tindak kriminal di jalan patung macan, indonesia. Dikabarkan tidak ada korban jiwa. Tersangka sudah ditangkap oleh polisi', 'author' => 'Gungyuda', 'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'],
            ['img' => 'assets/patungmacan.png', 'title' => 'Kepadatan Lalu Lintas Pada Hari Raya Lebaran Meningkat Signifikan', 'content' => 'Terjadi tindak kriminal di jalan patung macan, indonesia. Dikabarkan tidak ada korban jiwa. Tersangka sudah ditangkap oleh polisi', 'author' => 'Gungyuda', 'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'],
            ['img' => 'assets/patungmacan.png', 'title' => 'Kepadatan Lalu Lintas Pada Hari Raya Lebaran Meningkat Signifikan', 'content' => 'Terjadi tindak kriminal di jalan patung macan, indonesia. Dikabarkan tidak ada korban jiwa. Tersangka sudah ditangkap oleh polisi', 'author' => 'Gungyuda', 'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'],
            ['img' => 'assets/patungmacan.png', 'title' => 'Kepadatan Lalu Lintas Pada Hari Raya Lebaran Meningkat Signifikan', 'content' => 'Terjadi tindak kriminal di jalan patung macan, indonesia. Dikabarkan tidak ada korban jiwa. Tersangka sudah ditangkap oleh polisi', 'author' => 'Gungyuda', 'url' => 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'],  
        ];
        return view('User.HomePageUser', compact('artikel'));
    }
}
