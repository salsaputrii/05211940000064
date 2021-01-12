@extends('template')

<!--style button 1 2 3 di bawah-->
<style type="text/css">
    .pagination li{
        float: left;
        list-style-type: none;
        margin:3px;
    }
</style>


    @section('judulhalaman')

    <div class="row justify-content-center">
        <div class="col-sm-12">

            <!--judul-->
            <h1 class="b">Data Mahasiswa</h1>


            @endsection

            @section('content')

            <!--tabel mahasiswa-->
            <table class="table table-hover">
                <thead style="background-color: rgb(56, 54, 54); color:  rgb(253, 242, 251)">
                    <tr>
                        <th>NRP</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th>IPK</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                @foreach($mahasiswa as $m)
                <tbody>
                    <tr>
                        <td>{{ $m->NRP }}</td>
                        <td>{{ $m->Nama }}</td>
                        <td>{{ $m->Jurusan }}</td>
                        <td>{{ $m->IPK }}</td>
                        <!--button tambah & hapus-->
                        <td>

                            <a href="/mahasiswa/tambahMahasiswa"><button type="button" class="btn btn-outline-success" style="margin-right: 10px">Tambah Data</button></a>
                            <a href="/mahasiswa/hapusMahasiswa/{{ $m->NRP }}"><button type="button" class="btn btn-outline-danger">Hapus Data</button></a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>

            <!--menampilan jumlah data per page-->
            Halaman : {{ $mahasiswa->currentPage() }} <br/>
            Jumlah Data : {{ $mahasiswa->total() }} <br/>
            Data Per Halaman : {{ $mahasiswa->perPage() }} <br/>
            <br/>
            <!--menampilkan button 1 2 3-->
            {{ $mahasiswa->links() }}
        </div>
    </div>

    @endsection
