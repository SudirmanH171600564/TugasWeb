<?php

namespace App\Http\Controllers;

use App\Pengumuman;
use Illuminate\Http\Request;
use App\KategoriPengumuman;

class PengumumanController extends Controller
{
  public function index(){
     $Pengumuman=Pengumuman::all();
     return view('pengumuman.index',compact('Pengumuman'));
 }
  public function show($id){
    $pengumuman=Pengumuman::find($id);
    return view('pengumuman.show',compact('pengumuman'));
}
 public function create(){

     $kategoriPengumuman= KategoriPengumuman::pluck('nama','id');
     return view('pengumuman.create',compact('kategoriPengumuman'));
 }

 public function store(Request $request){
     $input=$request->all();

     Pengumuman::create($input);

     return redirect(route('pengumuman.index'));
 }
}