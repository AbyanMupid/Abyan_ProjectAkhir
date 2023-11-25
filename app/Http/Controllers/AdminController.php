<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function kelas(Request $request){
        return view('kelas');
    }

    public function petugas(Request $request){
        return view('petugas.petugas');
}
    public function index(Request $request){
        return view('index');
}
    public function siswa(Request $request){
        return view('siswa');
}
public function tambahpetugas(Request $request){
    return view('petugas.tambahpetugas');
}
}