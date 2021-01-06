@extends('template')


@section('judulhalaman')

 <h1 class="a">Edit Mutasi</h1>
 <br/>
 <br/>
 <a href="/mutasi"><button type="button" class="btn btn-light"> < Kembali</button></a>

@endsection


@section('content')

 @foreach($mutasi as $m)
 <form action="/mutasi/updateMutasi" method="post">
  {{ csrf_field() }}

  <input type="hidden" name="idMutasi" value="{{ $m->ID }}"> <br/>

  <!--untuk membuat combo box pada field ID Pegawai-->
  <div class="form-group">
    <label for="idPegawai">ID Pegawai</label>
    <select name="idPegawai" class="form-control">
    <!--jadi ini option nya ga ditulis manual tapi pake foreach biar fleksibel-->
        @foreach ($pegawai_id as $id)
        <option value="{{$id->pegawai_id}}"
            @if($m->IDPegawai==$id->pegawai_id) selected="selected"
            @endif> {{$id->pegawai_nama}}
        </option>
        @endforeach
    </select>

  </div>

  <div class="form-group">
    <label for="departemen">Departemen</label>
    <input type="text" class="form-control" required="required" name="departemen" value="{{ $m->Departemen }}"> <br/>
  </div>

  <div class="form-group">
    <label for="subDepartemen">Sub Departemen</label>
    <input type="text" class="form-control" required="required" name="subDepartemen" value="{{ $m->SubDepartemen }}"> <br/>
  </div>

  <div class="form-group">
    <label for="mulaiBertugas">Mulai Bertugas</label>
    <input type="datetime-local" required="required" class="form-control" name="mulaiBertugas" value="{{ $m->MulaiBertugas }}"> <br/>

  </div>
  <button type="submit" class="btn btn-primary" value="Simpan Data">Simpan Data</button>

 </form>
 @endforeach

 @endsection
