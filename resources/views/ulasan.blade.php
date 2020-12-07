@extends('layouts.app')
@section('Judul Halaman','Ulasan')
@section('content')
<div class="container">
@if(session('sukses'))
<div class="alert alert-success" role="alert">
Ulasan Berhasil Dikirimkan
</div>
@endif
<div class="row">
<div class="col">
	<h1>Ulasan</h1><br/>
	<p>Untuk memberikan ulasan silahkan klik tombol dibawah</p><br/>
	<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
  Buat Ulasan
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buat Ulasan</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="/ulasanpelanggan/create" method="POST">
		{{csrf_field()}}
				<div class="form-group">
			<label for="inputState">Rating</label>
			<select name="rating" id="inputState" class="form-control">
				<option selected>1</option>
				<option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
			</select>
			</div>

		<div class="form-group">
			<label for="exampleFormControlTextarea1">Berikan Ulasan</label>
			<textarea name="isi_ulasan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
		</div>
		

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Kirim</button>
		</form>
      </div>
    </div>
  </div>
</div>
</div>
</div>
</div>
@endsection