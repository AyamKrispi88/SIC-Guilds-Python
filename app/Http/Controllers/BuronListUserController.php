<?php

namespace App\Http\Controllers;


class BuronListUserController extends Controller
{
    public function index(){
        $cards = [
            [
                'img' => '1.png',
                'title' => 'Krishna Ardi',
                'ket' => 'isi-deskripsi'
            ]
        ];
        return view('User.BuronListUser', compact('cards'));
    }
}
