@extends('template')


<!--ini buat style pagination yg di bawah 1 2 3 4-->
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin:3px;
    }
</style>

@section('judulhalaman')

<h1 class="b">Data Pegawai</h1>

<p>Cari Data Pegawai :</p>
<form action="/pegawai/cari" method="GET" class="form-inline">
    <div class="form-group">

        <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Cari informasi..." value="{{ old('cari') }}">
        <button class="btn btn-primary" type="submit" value="CARI">Cari</button>

        </div>
   </form>
   <br/>
   <a href="/pegawai"><button type="button" class="btn btn-light"> < Kembali</button></a>
   <a href="/pegawai/tambah"><button type="button" class="btn btn-light"> + Tambah</button></a>

@endsection

@section('content')

 <table class="table table-hover">
    <thead style="background-color: rgb(56, 54, 54); color:  rgb(253, 242, 251)">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
     </thead>
  @foreach($pegawai as $p)
    <tbody>
        <tr>
            <td>{{ $p->pegawai_nama }}</td>
            <td>{{ $p->pegawai_jabatan }}</td>
            <td>{{ $p->pegawai_umur }}</td>
            <td>{{ $p->pegawai_alamat }}</td>
            <td>
                <a href="/pegawai/edit/{{ $p->pegawai_id }}"><button type="button" class="btn btn-outline-success" style="margin-right: 10px">Edit</button></a></a>
                <a href="/pegawai/hapus/{{ $p->pegawai_id }}"><button type="button" class="btn btn-outline-danger">Hapus</button></a></a>
            </td>
        </tr>
    </tbody>

  @endforeach

    </table>

    <br/>
 Halaman : {{ $pegawai->currentPage() }} <br/>
 Jumlah Data : {{ $pegawai->total() }} <br/>
 Data Per Halaman : {{ $pegawai->perPage() }} <br/>

 <br/>
 {{ $pegawai->links() }}

@endsection
