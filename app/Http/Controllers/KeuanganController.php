<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use\App\Keuangan;
use DB;
class KeuanganController extends Controller
{
    public function index()
    {
        $keuangan = Keuangan::with('siswa')->get();
        return view('admin.keuangan.keuangan', ['keuangan' => $keuangan]);
    }
    
    public function create()
    {
    	$siswa = DB::table('siswa')->get();
   
        return view('admin.keuangan.create', ['siswa' => $siswa]);
    }

    public function store()
    {
        $keuangan = new Keuangan;
        $keuangan->id_siswa = request('id_siswa');
        $keuangan->pembayaran = request('pembayaran');
        $keuangan->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/keuangan');
    }
}
