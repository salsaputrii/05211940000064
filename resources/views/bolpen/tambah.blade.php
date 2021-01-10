@extends('template')


@section('judulhalaman')

    <!--supaya form nya kecil dan di tengah-->
    <div class="row justify-content-center">
        <div class="col-sm-4">

            <!--judul-->
            <h1 style="text-align: center; font-family: Arial; margin-bottom: 40px; font-weight: bold;">Tambah Bolpen</h1>
            <br/>
            <br/>
            <!--button kembali-->
            <a href="/bolpen"><button type="button" class="btn btn-light"> < Kembali</button></a>

            @endsection


            @section('content')

            <form action="/bolpen/storeBolpen" method="post">
                {{ csrf_field() }}

                <!--field merk-->
                <div class="form-group">
                    <label for="merk">Merk Bolpen</label>
                    <input type="text" class="form-control" name="merk" required="required" id="merk"> <br/>
                </div>

                <!--field stock-->
                <div class="form-group">
                    <label for="stock">Stock Bolpen</label>
                    <input type="number" class="form-control" name="stock" required="required" id="stock"> <br/>
                </div>

                <!--field tersedia-->
                <div class="form-group">
                    <label for="tersedia">Tersedia</label>
                    <input type="text" class="form-control" name="tersedia" required="required" id="tersedia"> <br/>
                </div>

                <!--button submit-->
                <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>

            </form>
        </div>
    </div>

@endsection
