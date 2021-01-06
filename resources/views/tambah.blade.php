@extends('template')

@section('judulhalaman')
    <h1 class="a">Tambah Pegawai</h1>
    <br/>
    <br/>
    <a href="/pegawai"><button type="button" class="btn btn-light"> < Kembali</button></a>
@endsection

@section('content')
	<form action="/pegawai/store" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" required="required" id="nama"> <br/>
        </div>
        <div class="form-group">
            <label for="nama">Jabatan</label>
            <input type="text" class="form-control" name="jabatan" required="required" id="jabatan"> <br/>
        </div>
        <div class="form-group">
            <label for="nama">Umur</label>
            <input type="number" class="form-control" name="umur" required="required" id="umur"> <br/>
        </div>
        <div class="form-group">
            <label for="nama">Alamat</label>
            <textarea name="alamat" class="form-control" required="required"></textarea> <br/>
        </div>
		<button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>
    </form>
@endsection

