<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class MahasiswaController extends Controller
{
    public function indexMahasiswa()
    {
    	// mengambil data dari table mahasiswa
        $mahasiswa = DB::table('mahasiswa')->paginate(5);

    	// mengirim data mahasiswa ke view index
    	return view('mahasiswa.index',['mahasiswa' => $mahasiswa]);
    }


    // method untuk menampilkan view form tambah mahasiswa
    public function tambahMahasiswa()
    {
	    // memanggil view tambah
	    return view('mahasiswa.tambah');
    }


    // method untuk insert data ke table bolpen
    public function storeMahasiswa(Request $request)
    {
	    // insert data ke table bolpen
	    DB::table('mahasiswa')->insert([
            'NRP' => $request->NRP,
		    'Nama' => $request->Nama,
		    'Jurusan' => $request->Jurusan,
		    'IPK' => $request->IPK,
	    ]);
	    // alihkan halaman ke halaman mahasiswa
	    return redirect('/mahasiswa');
    }


    // method untuk hapus data mahasiswa
    public function hapusMahasiswa($NRP)
    {
	    // menghapus data bolpen berdasarkan kode yang dipilih
	    DB::table('mahasiswa')->where('NRP',$NRP)->delete();

	    // alihkan halaman ke halaman bolpen
	    return redirect('/mahasiswa');
    }


}
