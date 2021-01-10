<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class BolpenController extends Controller
{
    public function indexBolpen()
    {
    	// mengambil data dari table bolpen
        $bolpen = DB::table('bolpen')->paginate(5);

    	// mengirim data pegawai ke view index
    	return view('bolpen.index',['bolpen' => $bolpen]);
    }


    // method untuk menampilkan view form tambah bolpen
    public function tambahBolpen()
    {
	    // memanggil view tambah
	    return view('bolpen.tambah');
    }


    // method untuk insert data ke table bolpen
    public function storeBolpen(Request $request)
    {
	    // insert data ke table bolpen
	    DB::table('bolpen')->insert([
		    'merkbolpen' => $request->merk,
		    'stockbolpen' => $request->stock,
		    'tersedia' => $request->tersedia,
	    ]);
	    // alihkan halaman ke halaman bolpen
	    return redirect('/bolpen');
    }


    // method untuk edit data bolpen
    public function editBolpen($kodebolpen)
    {
	    // mengambil data bolpen berdasarkan kode yang dipilih
	    $bolpen = DB::table('bolpen')->where('kodebolpen',$kodebolpen)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('bolpen.edit',['bolpen' => $bolpen]);
    }


    // update data bolpen
    public function updateBolpen(Request $request)
    {
        // update data bolpen
        //kodebolpen ini name di view
	    DB::table('bolpen')->where('kodebolpen',$request->kodebolpen)->update([
		    'merkbolpen' => $request->merk,
		    'stockbolpen' => $request->stock,
		    'tersedia' => $request->tersedia
	    ]);
	    // alihkan halaman ke halaman bolpen
	    return redirect('/bolpen');
    }


    // method untuk hapus data bolpen
    public function hapusBolpen($kodebolpen)
    {
	    // menghapus data bolpen berdasarkan kode yang dipilih
	    DB::table('bolpen')->where('kodebolpen',$kodebolpen)->delete();

	    // alihkan halaman ke halaman bolpen
	    return redirect('/bolpen');
    }


    //method untuk melakukan search
    public function cari(Request $request)
    {
        //menangkap data pencarian
        $cari = $request->cari;

        //mengambil data dari table bolpen sesuai pencarian data
        $bolpen = DB::table('bolpen')
        ->where('merkbolpen','like',"%".$cari."%")
        ->paginate();

        //mengirim data bolpen ke view index.blade.php
        return view('bolpen.index',['bolpen' => $bolpen]);
    }







}
