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
        <div class="col-sm-7">

            <!--judul-->
            <h1 class="b">Data Bolpen</h1>

            <!--pencarian-->
            <p>Cari Data Bolpen :</p>
            <form action="/bolpen/cari" method="GET" class="form-inline">
                <div class="form-group">
                    <input class="form-control mr-sm-2" type="text" name="cari" placeholder="Cari..." value="{{ old('cari') }}">
                    <button class="btn btn-primary" type="submit" value="CARI">Cari</button>
                </div>
            </form>

            <!--button kembali & tambah-->
            <a href="/bolpen"><button type="button" class="btn btn-light"> < Kembali</button></a>
            <a href="/bolpen/tambahBolpen"><button type="button" class="btn btn-light"> + Tambah</button></a>

            @endsection

            @section('content')

            <!--tabel bolpen-->
            <table class="table table-hover">
                <thead style="background-color: rgb(56, 54, 54); color:  rgb(253, 242, 251)">
                    <tr>
                        <th>Merk Bolpen</th>
                        <th>Stock Bolpen</th>
                        <th>Tersedia</th>
                        <th>Opsi</th>
                    </tr>
                </thead>
                @foreach($bolpen as $b)
                <tbody>
                    <tr>
                        <td>{{ $b->merkbolpen }}</td>
                        <td>{{ $b->stockbolpen }}</td>
                        <td>{{ $b->tersedia }}</td>
                        <!--button edit & hapus-->
                        <td>
                            <a href="/bolpen/editBolpen/{{ $b->kodebolpen }}"><button type="button" class="btn btn-outline-success" style="margin-right: 10px">Edit</button></a>
                            <a href="/bolpen/hapusBolpen/{{ $b->kodebolpen }}"><button type="button" class="btn btn-outline-danger">Hapus</button></a>
                        </td>
                    </tr>
                </tbody>
                @endforeach
            </table>

            <!--menampilan jumlah data per page-->
            Halaman : {{ $bolpen->currentPage() }} <br/>
            Jumlah Data : {{ $bolpen->total() }} <br/>
            Data Per Halaman : {{ $bolpen->perPage() }} <br/>
            <br/>
            <!--menampilkan button 1 2 3-->
            {{ $bolpen->links() }}
        </div>
    </div>

    @endsection
