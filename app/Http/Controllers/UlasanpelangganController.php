<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UlasanpelangganController extends Controller
{
	public function ulasan(){
		$data_ulasan = \App\ulasanpelanggan::all();
return view('ulasan', ['data_ulasan' => $data_ulasan]);
}
public function create(Request $request){
		\App\ulasanpelanggan::create($request->all());
		return redirect ('ulasanpelanggan')->with('sukses','Ulasan Berhasil Dikirimkan');
}
}
