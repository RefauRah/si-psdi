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

        if (is_null($guru->absen = request('nip'))){
			\Session::flash('flash_message_fail',' Error : Tidak ada data yand dipilih.');
			return redirect()->back();
		}
		else{
			$counter = count(request('nip'));

			$nip = request('nip');
			date_default_timezone_set("Asia/Bangkok");
			$tgl_absen = date("Y-m-d")." ".date("H:i:s");

			for ( $i=0; $i< $counter; $i++) {
			    $guru = new AbsensiGuru;
				$guru->nip = $nip[$i];
		        $guru->absen = request('absen');
		        $guru->keterangan = request('keterangan');
		        $guru->tgl_absen = $tgl_absen;
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

        public function show()
    {
     	$users = DB::table('absensiguru')
		->join('guru', 'absensiguru.nip', '=', 'guru.nip')
		->select('absensiguru.*', 'guru.nama')
		->get();
   
       return view('admin.absensi.laporanGuru',['users'=>$users]);
    }

}
