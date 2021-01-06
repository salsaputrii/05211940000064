@extends('template')

@section('judulhalaman')
 <h1 class="a">Edit Pegawai</h1>
 <br/>
 <br/>
 <a href="/pegawai"><button type="button" class="btn btn-light"> < Kembali</button></a>
@endsection

@section('content')

 @foreach($pegawai as $p)
 <form action="/pegawai/update" method="post">
  {{ csrf_field() }}

  <input type="hidden" name="id" value="{{ $p->pegawai_id }}"> <br/>

  <div class="form-group">
    <label for="nama">Nama</label>
    <input type="text" class="form-control" required="required" name="nama" value="{{ $p->pegawai_nama }}"> <br/>
  </div>

  <div class="form-group">
    <label for="jabatan">Jabatan</label>
    <input type="text" class="form-control" required="required" name="jabatan" value="{{ $p->pegawai_jabatan }}"> <br/>
  </div>

  <div class="form-group">
    <label for="umur">Umur</label>
    <input type="number" class="form-control" required="required" name="umur" value="{{ $p->pegawai_umur }}"> <br/>
  </div>

  <div class="form-group">
    <label for="alamat">Alamat</label>
    <textarea required="required" class="form-control" name="alamat">{{ $p->pegawai_alamat }}</textarea> <br/>
  </div>

  <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>

 </form>
 @endforeach

 @endsection
