@extends('template')


@section('judulhalaman')

    <!--supaya form nya kecil dan di tengah-->
    <div class="row justify-content-center">
        <div class="col-sm-4">

            <!--judul-->
            <h1 style="text-align: center; font-family: Arial; margin-bottom: 40px; font-weight: bold;">Tambah Data</h1>
            <br/>
            <br/>
            <!--button kembali-->
            <a href="/mahasiswa"><button type="button" class="btn btn-light"> < Kembali</button></a>

            @endsection


            @section('content')

            <form action="/mahasiswa/storeMahasiswa" method="post">
                {{ csrf_field() }}

                <div class="form-group">
                    <label for="nrp">NRP</label>
                    <input type="text" class="form-control" name="nrp" required="required" id="nrp"> <br/>
                </div>

                <!--field merk-->
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" required="required" id="nama"> <br/>
                </div>

                <!--field stock-->
                <div class="form-group">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" class="form-control" name="jurusan" required="required" id="jurusan"> <br/>
                </div>

                <!--field tersedia-->
                <div class="form-group">
                    <label for="ipk">IPK</label>
                    <input type="text" class="form-control" name="ipk" required="required" id="ipk"> <br/>
                </div>

                <!--button submit-->
                <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>

            </form>
        </div>
    </div>

@endsection
