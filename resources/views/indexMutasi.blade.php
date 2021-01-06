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
<!--memanggil@yield('judulhalaman')-->

<h1 class="b">Mutasi Pegawai</h1>

<p>Cari Informasi Mutasi :</p>
<form action="/mutasi/cari" method="GET" class="form-inline">
    <div class="form-group">

    <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Cari informasi..." value="{{ old('cari') }}">
    <button class="btn btn-primary" type="submit" value="CARI">Cari</button>

    </div>

   </form>
   <br/>
   <a href="/mutasi"><button type="button" class="btn btn-light"> < Kembali</button></a>
   <a href="/mutasi/tambahMutasi"><button type="button" class="btn btn-light"> + Tambah</button></a>

@endsection


@section('content')
<!--memanggil@yield('content')-->

 <table class="table table-hover">
    <thead style="background-color: rgb(56, 54, 54); color:  rgb(253, 242, 251)">
        <tr>
            <th>ID Pegawai</th>
            <th>Departemen</th>
            <th>Sub Departemen</th>
            <th>Mulai Bertugas</th>
            <th>Opsi</th>
        </tr>
     </thead>
  @foreach($mutasi as $m)
    <tbody>
        <tr>
            <td>{{ $m->IDPegawai }}</td>
            <td>{{ $m->Departemen }}</td>
            <td>{{ $m->SubDepartemen }}</td>
            <td>{{ $m->MulaiBertugas }}</td>
            <td>
                <a href="/mutasi/editMutasi/{{ $m->ID }}"><button type="button" class="btn btn-outline-success" style="margin-right: 10px">Edit</button></a>
                <a href="/mutasi/hapusMutasi/{{ $m->ID }}"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
            </td>
        </tr>
    </tbody>

  @endforeach

    </table>

    <br/>
<!--kalo datanya masih sedikit jadinya kurang bagus. biar button 1 2 3 nya keluar datanya harus banyak-->
 Halaman : {{ $mutasi->currentPage() }} <br/>
 Jumlah Data : {{ $mutasi->total() }} <br/>
 Data Per Halaman : {{ $mutasi->perPage() }} <br/>

<br/>
 {{ $mutasi->links() }}

@endsection
