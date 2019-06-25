<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\AbsensiSiswaSekolah;
use App\SiswaModel;
use DB;

class AbsensiSiswaSekolahController extends Controller
{
    //
    public function index()
    {
        $siswa = SiswaModel::with('kelas')->get();
        $kelas = DB::table('kelas')->get();

        return view('/admin/absensi/siswaSekolah', ['siswa' => $siswa], ['kelas' => $kelas]);
    }


  public function getUsers($id = 0){
    // Fetch all records
    $userData['data'] = Page::getuserData($id);

    echo json_encode($userData);
    exit;
  }

    public function store()
    {
        $siswa = new AbsensiSiswaSekolah;

  //       if (is_null($siswa->absen = request('id_siswa'))){
		// 	\Session::flash('flash_message_fail',' Error : Tidak ada data yand dipilih.');
		// 	return redirect()->back();
		// }
		// else{
        	return request('nis');
			$counter = count(request('nis'));

			$nis = request('nis');
			date_default_timezone_set("Asia/Bangkok");
			$tgl_absen = date("Y-m-d")." ".date("H:i:s");

			for ( $i=0; $i< $counter; $i++) {
			    $siswa = new AbsensiSiswaSekolah;
				$siswa->nis = $nis[$i];
				$siswa->id_kelas = request('id_kelas');
				$siswa->pertemuan = request('pertemuan');
		        $siswa->absen = request('absen');
		        $siswa->keterangan = request('keterangan');
		        $siswa->tgl_absen = $tgl_absen;
		        $siswa->save();
			// }   

			// $guru->id_guru = request('id_guru');
	  //       $guru->absen = request('absen');
	  //       $guru->keterangan = request('keterangan');
	  //       $guru->tgl_absen = request('tgl_absen');
	  //       $guru->save();

	        // \Session::flash('flash_message','successfully saved.');

	        return redirect('/absensiswasekolah');
		}
    }
}
