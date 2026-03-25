<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class BuronAdminController extends Controller
{
    public $cards;

    public function __construct()
    {
       
    }

    public function index()
    {
         $buronan = [
                ['gmbr' => 'assets/GambarBuron/1.png', 'judul' => 'Krishna Ardi', 'ket' => 'Perampokan Bank BPD Bali. 18 Maret 2025. Dalung-Badung'],
                ['gmbr' => 'assets/GambarBuron/2.png', 'judul' => 'Tryas Angsadewi', 'ket' => 'Penyeludupan narkoba. 29 april 2024. Gilimanuk-Jembrana'],
                ['gmbr' => 'assets/GambarBuron/3.png', 'judul' => 'Rania', 'ket' => 'Pelaku pembegalan jalan raya. 28 april 2022. Sidan-Jakarta'],
                ['gmbr' => 'assets/GambarBuron/4.png', 'judul' => 'Guy', 'ket' => 'Tersangka penipuan online melalui media sosial. 3 Juni 2022. Bandung-Jawa Barat'],
                ['gmbr' => 'assets/GambarBuron/5.png', 'judul' => 'Pilip si rambut hitam', 'ket' => 'Tersangka penipuan online melalui media sosial. 3 Juni 2022. Bandung-Jawa Barat'],
                ['gmbr' => 'assets/GambarBuron/6.png', 'judul' => 'Agoesde direktur VOC', 'ket' => 'Tersangka penipuan online melalui media sosial. 3 Juni 2022. Bandung-Jawa Barat'],
                ['gmbr' => 'assets/GambarBuron/7.png', 'judul' => 'Lady Aruel', 'ket' => 'Tersangka penipuan online melalui media sosial. 3 Juni 2022. Bandung-Jawa Barat'],
                ['gmbr' => 'assets/GambarBuron/8.png', 'judul' => 'Deasa si pengembara timur', 'ket' => 'Tersangka penipuan online melalui media sosial. 3 Juni 2022. Bandung-Jawa Barat'],
                ['gmbr' => 'assets/GambarBuron/9.png', 'judul' => 'Ari-ari', 'ket' => 'Tersangka penipuan online melalui media sosial. 3 Juni 2022. Bandung-Jawa Barat']

        ];
        return view('Admin.MenuBuronan.DaftarBuronan', compact('buronan'));
    }
}
