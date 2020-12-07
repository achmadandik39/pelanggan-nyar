<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function pengembalian(){
        $data_pengembalian = \App\pengembalian::all();
		return view('pengembalian', ['data_pengembalian' => $data_pengembalian]);
    }
    public function create(Request $request){
        \App\pengembalian::create($request->all());
        return redirect ('pengembalian')->with('sukses','pengembalian Berhasil Diajukan');
    }
}
