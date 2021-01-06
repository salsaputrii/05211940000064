<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//digunakan untuk pertukaran value antar halaman html

use Illuminate\Support\Facades\DB;
//kelas untuk mengkases database
//import java.io.*; (kalo di java)
//use "namespace"; (kalo di laravel)
//namespace = identifier global dalam laravel

class MutasiController extends Controller
{

public function indexMutasi()
    {

        //mengambil data dari table mutasi
        $mutasi = DB::table('mutasi')->paginate(5);
        //paginate(5) berarti jumlah data dalam satu halaman ada 5. bisa diatur

    	//mengirim data mutasi ke view indexMutasi
    	return view('indexMutasi',['mutasi' => $mutasi]);

    }


    //method untuk insert data ke table mutasi
    public function storeMutasi(Request $request)
    {

        //insert data ke table mutasi
        DB::table('mutasi')->insert([
        'IDPegawai' => $request->idPegawai,
        'Departemen' => $request->departemen,
        'SubDepartemen' => $request->subDepartemen,
        'MulaiBertugas' => $request->mulaiBertugas
        ]);

        //alihkan halaman ke halaman mutasi
        return redirect('/mutasi');

    }


    //method untuk edit data mutasi
    //menangkap data id yang dikirimkan dari route
    public function editMutasi($idMutasi)
    {

        //mengambil data mutasi berdasarkan id yang dipilih
        $mutasi = DB::table('mutasi')->where('ID',$idMutasi)->get();
        $pegawai_id = DB::table('pegawai')->get();

	    //passing data mutasi yang didapat ke view editMutasi.blade.php
	    return view('editMutasi',['mutasi' => $mutasi, 'pegawai_id' => $pegawai_id]);

    }

    //method untuk update data mutasi
    public function updateMutasi(Request $request)
    {

        //update data mutasi
	    DB::table('mutasi')->where('ID',$request->idMutasi)->update([
            'IDPegawai' => $request->idPegawai,
            'Departemen' => $request->departemen,
            'SubDepartemen' => $request->subDepartemen,
            'MulaiBertugas' => $request->mulaiBertugas
        ]);

	    //alihkan halaman ke halaman mutasi
	    return redirect('/mutasi');
    }

    //method untuk hapus data mutasi
    public function hapusMutasi($idMutasi)
    {

        //menghapus data mutasi berdasarkan id yang dipilih
	    DB::table('mutasi')->where('ID',$idMutasi)->delete();

	    //alihkan halaman ke halaman mutasi
        return redirect('/mutasi');

    }

    //method untuk menampilkan view tambahMutasi.blade.php
    public function tambahMutasi()
    {
        //mengambil data pegawai berdasarkan id jadi mencocokkan id tapi yang ditampilkan nama pegawai
        //diurutkan berdasarkan abjad nama
        $pegawai_id = DB::table('pegawai')->orderBy('pegawai_nama', 'asc')->get();

	    //memanggil view tambahMutasi.blade.php
	    return view('tambahMutasi', ['pegawai_id' => $pegawai_id]);

    }

    //method untuk melakukan search
    public function cari(Request $request)
	{
		//menangkap data pencarian
		$cari = $request->cari;

    		//mengambil data dari table mutasi sesuai pencarian data
		$mutasi = DB::table('mutasi')
		->where('Departemen','like',"%".$cari."%") //yang bisa disearch hanya departemen
		->paginate();

    		//mengirim data pegawai ke view indexMutasi.blade.php
		return view('indexMutasi',['mutasi' => $mutasi]);

    }

}
