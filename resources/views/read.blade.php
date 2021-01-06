@extends('template')

@section('judulhalaman')
 <h1 class="a">Detail Pegawai</h1>
 <br/>
 <br/>
 <a href="/pegawai"><button type="button" class="btn btn-light"> < Kembali</button></a>
@endsection

@section('content')


@foreach($pegawai as $p)


<div class="container">

    <h4 class="d">Data Pegawai</h4>
<!--biar rapi rata kea di shift gitu pake row sama col-->
    <div class="row">
        <div class="col-sm-2">
            <label for="name">Nama</label>
        </div>
        <div class="col-sm-6">
            : {{ $p->pegawai_nama }}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <label for="jabatan">Jabatan</label>
        </div>
        <div class="col-sm-6">
            : {{ $p->pegawai_jabatan }}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <label for="umur">Umur</label>
        </div>
        <div class="col-sm-6">
            : {{ $p->pegawai_umur }}
        </div>
    </div>

    <div class="row">
        <div class="col-sm-2">
            <label for="alamat">Alamat</label>
        </div>
        <div class="col-sm-6">
            : {{ $p->pegawai_alamat }}
        </div>
    </div>

 @endforeach
 <br/>


 <!--menampilkan tabel mutasi tiap pegawai-->
<h4 class="d">Daftar Mutasi</h4>

 <table class="table table-hover">
    <thead style="background-color: rgb(56, 54, 54); color:  rgb(253, 242, 251)">
        <tr>
            <th>Departemen</th>
            <th>Sub Departemen</th>
            <th>Mulai Bertugas</th>
        </tr>
     </thead>
  @foreach($mutasi as $m)
    <tbody>
        <tr>
            <td>{{ $m->Departemen }}</td>
            <td>{{ $m->SubDepartemen }}</td>
            <td>{{ $m->MulaiBertugas }}</td>
        </tr>
    </tbody>
    @endforeach
    </table>
 @endsection
</div>
