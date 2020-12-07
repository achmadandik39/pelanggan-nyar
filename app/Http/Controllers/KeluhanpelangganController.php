<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KeluhanpelangganController extends Controller
{
    public function pengaduan(){
        $data_pengaduan = \App\keluhanpelanggan::all();
		return view('pengaduan', ['data_pengaduan' => $data_pengaduan]);
    }
    public function create(Request $request){
        \App\keluhanpelanggan::create($request->all());
        return redirect ('keluhanpelanggan')->with('sukses','Keluhan Berhasil Dikirimkan');
    }
}
