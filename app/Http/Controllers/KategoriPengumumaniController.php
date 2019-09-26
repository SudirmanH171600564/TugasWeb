<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KAtegoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
        $KategoriPengumuman=KategoriPengumuman::all();

        return view('kategori_pengumuman.index',compact('KategoriPengumuman'));
}
}
