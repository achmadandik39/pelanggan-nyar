@extends('layouts.app')
@section('Judul Halaman','Pengembalian')
@section('content')
<div class="container">
@if(session('sukses'))
<div class="alert alert-success" role="alert">
Keluhan Berhasil Dikirimkan.
</div>
@endif
<div class="row">
<div class="col-md-9">
	<h1>Ajukan Pengembalian</h1><br/>

    <form action="/pengembalian/create" method="POST">
    {{csrf_field()}}
    <div class="form-group">
    <label for="formGroupExampleInput">Id pengembalian</label>
    <input name="id_pengembalian" class="form-control" type="text" placeholder="Id pengembalian" readonly>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput">Id pesanan</label>
    <input name="id_pesanan" class="form-control" type="text" placeholder="Id Pesanan" readonly>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Alasan pengembalian</label>
    <textarea name="isi_pengembalian" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Ajukan</button>

    </form>


<br/>
<br/><br/>
<br/>

<div class="row">
<div class="col-md-9">
<h2>Riwayat Aduan</h2>
<table class="table table-hover">
<tr style="color:#fff !important">
<th>Id pengembalian</th>
<th>Id pesanan</th>
<th>Tanggal</th>
<th>isi</th>
<th>Status</th>
</tr>
@foreach($data_pengembalian as $pengembalian)
<tr>
<td>{{$pengembalian->id_pengembalian}}</td>
<td>{{$pengembalian->id_pesanan}}</td>
<td>{{$pengembalian->tgl_pengembalian}}</td>
<td>{{$pengembalian->isi_pengembalian}}</td>
<td>
  @if(is_null($pengembalian->status_pengembalian))
  <p style="background:#FF0000; border-radius:10px;padding:5px;text-align: center;
    font-weight: bold;">Belum ditanggapi</p>
  @else
  <p style="background:#32CD32 ; border-radius:10px;padding:5px;text-align: center;
    font-weight: bold;">{{$pengembalian->status_pengembalian}}</p>
  @endif
  </td>
</tr>
@endforeach
</table>
</div>
</div>



</div>
</div>
</div>
@endsection