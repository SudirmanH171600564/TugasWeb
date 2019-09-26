<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\KategoriArtikel;

class KategoriArtikelController extends Controller
{
    public function index(){
        $KategoriArtikel=KategoriArtikel::all();

        return view('kategori_artikel.index',compact('KategoriArtikel'));

      /*  return view('kategori_artiker.index')
        ->with('KategoriArtikel',$kategoriArtikel);
*/
        
    }
}
