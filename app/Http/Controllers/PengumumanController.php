<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pengumuman;

class PengumumanController extends Controller
{
    public function index(){
        $Pengumuman=Pengumuman::all();

        return view('pengumuman.index',compact('Pengumuman'));
 }
}