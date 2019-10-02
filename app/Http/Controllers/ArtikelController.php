<?php

namespace App\Http\Controllers;

use App\Artikel;
use Illuminate\Http\Request;
use App\KategoriArtikel;

class ArtikelController extends Controller
{
    public function index(){
        $Artikel=Artikel::all();

        return view('artikel.index',compact('Artikel'));
 }
    public function show($id){
    $Artikel=Artikel::find($id);

    return view('artikel.show',compact('Artikel'));
}
    public function create(){

        $KategoriArtikel= KategoriArtikel::pluck('nama','id');
        

        return view('artikel.create');
    }

    public function store(Request $request){
        $input=$request->all();

        Artikel::create($input);

        return redirect(route('artikel.index'));
    }
}

