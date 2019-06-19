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

        if (is_null($guru->absen = request('id_guru'))){
			\Session::flash('flash_message_fail',' Error : Tidak ada data yand dipilih.');
			return redirect()->back();
		}
		else{
			$counter = count(request('id_guru'));

			$id_guru = request('id_guru');

			for ( $i=0; $i< $counter; $i++) {
			    $guru = new AbsensiGuru;
				$guru->id_guru = $id_guru[$i];
		        $guru->absen = request('absen');
		        $guru->keterangan = request('keterangan');
		        $guru->tgl_absen = request('tgl_absen');
		        $guru->save();
			}   

			// $guru->id_guru = request('id_guru');
	  //       $guru->absen = request('absen');
	  //       $guru->keterangan = request('keterangan');
	  //       $guru->tgl_absen = request('tgl_absen');
	  //       $guru->save();

	        \Session::flash('flash_message','successfully saved.');

	        return redirect('/absenguru');
		}
    }

}
