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
    	->select('absensi.id_absen','murid.nama as mrd','murid.nim as nm','absensi.pertemuanke')->paginate(10);

    	$filterKeyword = $request->get('keyword');

    	if($filterKeyword){
    		$data= DB::table('absensi')
    		->join('siswa as murid','absensi.id_siswa','=','murid.id_siswa')
    		->select('absensi.id_absen','murid.nama as mrd','absensi.pertemuanke')->where('absensi.pertemuanke', 'LIKE', "%filterKeyword%")->paginate(10);
    	}

    	// return view('admin/siswa/siswa',['absensi'=>$absensi]);
    	// return view('admin/siswa/siswa', compact('data'));
    	return view ('admin.siswa.siswa', ['absensi=>$data']);
    }
}
