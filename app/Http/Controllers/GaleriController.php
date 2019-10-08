<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Galeri;
use App\KategoriGaleri;

class GaleriController extends Controller
{
    public function index(){
        $Galeri=Galeri::all();

        return view('galeri.index',compact('Galeri'));
    
}
    public function show($id){
    $galeri=Galeri::find($id);
    
    return view('galeri.show',compact('galeri'));
}
    public function create(){
    
        $kategoriGaleri= KategoriGaleri::pluck('nama','id');
        return view('galeri.create', compact('kategoriGaleri'));
}
    
    public function store(Request $request){
        $input=$request->all();
    
        Galeri::create($input);
    
        return redirect(route('galeri.index'));
    } public function edit($id){
        $galeri=Galeri::find($id);
       
        if(empty($berita)){
          return redirect(route('galeri.index'));
        }
        return view('galeri.edit', compact('galeri'));
      }
      
      public function update($id,Request $request){
        $galeri=Galeri::find($id);
        $input=$request->all();  
    
         if(empty($galeri)){
            return redirect(route('galeri.index'));
        }
    
        $galeri->update($input);
    
        return redirect(route('galeri.index'));
          
      }
      public function destroy($id){
        $galeri=Galeri::find($id);
       
        if(empty($galeri)){
          return redirect(route('galeri.index'));
        }
    
        $galeri->delete();
        return redirect(route('galeri.index'));
      }
    }
    
    
