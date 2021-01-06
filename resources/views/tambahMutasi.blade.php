@extends('template')


@section('judulhalaman')

    <h1 class="a">Tambah Mutasi</h1>
    <br/>
    <br/>
    <a href="/mutasi"><button type="button" class="btn btn-light"> < Kembali</button></a>

@endsection


@section('content')

	<form action="/mutasi/storeMutasi" method="post">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="idPegawai">ID Pegawai</label>
            <select name="idPegawai" class="form-control" placeholder="Pilih nama pegawai">
                @foreach($pegawai_id as $id)
                <option value="{{$id->pegawai_id}}">{{$id->pegawai_nama}}</option>
                @endforeach
            </select>
            <!--udah gapake input type="text" karena udah gapake string tapi ganti combo box-->
        </div>

        <div class="form-group">
            <label for="departemen">Departemen</label>
            <input type="text" class="form-control" name="departemen" required="required" id="departemen"> <br/>
        </div>
        <div class="form-group">
            <label for="subDepartemen">Sub Departemen</label>
            <input type="text" class="form-control" name="subDepartemen" required="required" id="subDepartemen"> <br/>
        </div>
        <div class="form-group">
            <label for="mulaiBertugas">Mulai Mutasi</label>
            <input type="datetime-local" name="mulaiBertugas" class="form-control" required="required" id="mulaiBertugas"> <br/>
        </div>
		<button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>
    </form>

@endsection
