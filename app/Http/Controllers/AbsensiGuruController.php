<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\AbsensiGuru;

class AbsensiGuruController extends Controller
{
	// public function __construct(Guru $guru, AbsensiGuru $absensiguru)
 //    {
 //        $this->guru = $guru;
 //        $this->absensiguru = $absensiguru;
 //    }

    public function index()
    {
        $guru = DB::table('guru')->get();
        $absenguru = DB::table('absensiguru')->get();

        return view('/admin/absensi/guru', ['guru' => $guru]);
    }

    public function store()
    {
        $guru = new AbsensiGuru;
        $nomer = request('nomer');

        $guru->id_guru = request('id_guru'.$nomer);
        $guru->absen = request('absen'.$nomer);
        $guru->keterangan = request('keterangan'.$nomer);
        $guru->tgl_absen = request('tgl_absen');
        // $guru->alamat = request('alamat');
        // $guru->tempat_lahir = request('tempat_lahir');
        // $guru->tgl_lahir = request('tgl_lahir');
        // $guru->no_telp = request('no_telp');
        //$guru->image = request()->file('image')->store('public/images');
        $guru->save();

        // \Session::flash('flash_message','successfully saved.');

        return redirect('/absenguru');
    }

}
