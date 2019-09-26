<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriPengumuman;

class KategoriPengumumanController extends Controller
{
    public function index(){
        $KategoriPengumuman=KategoriPengumuman::all();

        return view('kategori_pengumuman.index',compact('KategoriPengumuman'));

              /*  return view('kategori_artiker.index')
        ->with('KategoriArtikel',$kategoriArtikel);
*/
    }
}
