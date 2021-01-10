@extends('template')


@section('judulhalaman')

<!--supaya form nya kecil dan di tengah-->
<div class="row justify-content-center">
    <div class="col-sm-4">

        <!--judul-->
        <h1 style="text-align: center; font-family: Arial; margin-bottom: 40px; font-weight: bold;">Edit Data Bolpen</h1>
        <br/>
        <br/>
        <!--button kembali-->
        <a href="/bolpen"><button type="button" class="btn btn-light"> < Kembali</button></a>
        @endsection


        @section('content')

        @foreach($bolpen as $b)
        <form action="/bolpen/updateBolpen" method="post">

            {{ csrf_field() }}
            <input type="hidden" name="kodebolpen" value="{{ $b->kodebolpen }}"> <br/>
            <!--field merk-->
            <div class="form-group">
                <label for="merk">Merk Bolpen</label>
                <input type="text" class="form-control" required="required" name="merk" value="{{ $b->merkbolpen }}"> <br/>
            </div>

            <!--field stock-->
            <div class="form-group">
                <label for="stock">Stock Bolpen</label>
                <input type="number" class="form-control" required="required" name="stock" value="{{ $b->stockbolpen }}"> <br/>
            </div>

            <!--field tersedia-->
            <div class="form-group">
                <label for="tersedia">Tersedia</label>
                <input type="text" class="form-control" required="required" name="tersedia" value="{{ $b->tersedia }}"> <br/>
            </div>

            <!--button submit-->
            <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>

        </form>

        @endforeach

        </div>
    </div>

    @endsection
