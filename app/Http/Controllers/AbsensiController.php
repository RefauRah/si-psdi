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
    	->join('jns_kegiatan as jns','absensi.id_kegiatan','=','jns.id_kegiatan')
    	->select('absensi.id_absen','murid.nama as mrd','murid.nik as nm','jns.nama as jnm','absensi.pertemuanke','absensi.status_hadir','absensi.id_kegiatan')->get();

    	$filterKeyword = $request->get('keyword');

    	if($filterKeyword){
    		$data= DB::table('absensi')
    		->join('siswa as murid','absensi.id_siswa','=','murid.id_siswa')
    		->join('jns_kegiatan as jns','absensi.id_kegiatan','=','jns.id_kegiatan')
    		->select('absensi.id_absen','murid.nama as mrd','murid.nik as nm','jns.nama as jnm','absensi.pertemuanke','absensi.status_hadir','absensi.id_kegiatan')->where('absensi.pertemuanke', 'LIKE', "%filterKeyword%")->get();
    	}

    	// return view('admin/siswa/siswa',['absensi'=>$absensi]);
    	return view('admin/absen/absenSiswa', compact('data'));
    	return view ('admin.absen.absenSiswa', ['absensi=>$data']);

    	
    }
}
