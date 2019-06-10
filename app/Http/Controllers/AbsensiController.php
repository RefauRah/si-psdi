<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use DB;

class AbsensiController extends Controller
{
    public function index(Request $request)
    {	
    	

	   	$data= DB::table('absensi')
    	->join('siswa as murid','absensi.id_siswa','=','murid.id_siswa')
    	->select('absensi.id_absen','murid.nama as mrd','murid.nik as nm','absensi.pertemuanke','absensi.status_hadir','absensi.jns_kegiatan')->get();

    	$filterKeyword = $request->get('keyword');

    	if($filterKeyword){
    		$data= DB::table('absensi')
    		->join('siswa as murid','absensi.id_siswa','=','murid.id_siswa')
    		->select('absensi.id_absen','murid.nama as mrd','murid.nik as nm','absensi.pertemuanke','absensi.status_hadir','absensi.jns_kegiatan')->where('absensi.pertemuanke', 'LIKE', "%filterKeyword%")->get();
    	}

    	// return view('admin/siswa/siswa',['absensi'=>$absensi]);
    	return view('admin/absen/absenSiswa', compact('data'));
    	return view ('admin.absen.absenSiswa', ['absensi=>$data']);

    	
    }
}
