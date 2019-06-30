<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;
use App\AbsenStaf;

class AbsenStafController extends Controller
{
	// public function __construct(Guru $guru, AbsensiGuru $absensiguru)
 //    {
 //        $this->guru = $guru;
 //        $this->absensiguru = $absensiguru;
 //    }

    public function index()
    {
        $staf = DB::table('staf')->get();
        $absenstaf= DB::table('absenstaf')->get();

        return view('/admin/absensi/staf', ['staf' => $staf]);
    }

    public function store()
    {
        $staf = new AbsenStaf;

        if (is_null($staf->absen_staf = request('nip_staf'))){
			\Session::flash('flash_message_fail',' Error : Tidak ada data yand dipilih.');
			return redirect()->back();
		}
		else{
			$counter = count(request('nip_staf'));

			$nip_staf = request('nip_staf');
			date_default_timezone_set("Asia/Bangkok");
			$tgl_absen_staf = date("Y-m-d")." ".date("H:i:s");

			for ( $i=0; $i< $counter; $i++) {
			    $staf = new AbsenStaf;
				$staf->nip_staf = $nip_staf[$i];
		        $staf->absen_staf = request('absen_staf');
		        $staf->keterangan_staf = request('keterangan_staf');
		        $staf->tgl_absen_staf = $tgl_absen_staf;
		        $staf->save();
			}   

			// $guru->id_guru = request('id_guru');
	  //       $guru->absen = request('absen');
	  //       $guru->keterangan = request('keterangan');
	  //       $guru->tgl_absen = request('tgl_absen');
	  //       $guru->save();

	        \Session::flash('flash_message','successfully saved.');

	        return redirect('/absenstaf');
		}
    }

        public function show()
    {
     	$users = DB::table('absenstaf')
		->join('staf', 'absenstaf.nip_staf', '=', 'staf.nip_staf')
		->select('absenstaf.*', 'staf.nama_staf')
		->get();
   
       return view('admin.absensi.laporanStaf',['users'=>$users]);
    }

}
