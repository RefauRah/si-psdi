<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\WaliKelas;
use DB;

class WaliKelasController extends Controller
{
    public function index()
    {
        $walikelas = WaliKelas::all();
        return view('admin.wali_kelas.wali_kelas', ['walikelas' => $walikelas]);
    }
    
    public function show(Guru $id)
    {
        return view('admin.wali_kelas.show', ['walikelas' => $id]);
    }
    
    public function create()
    {
    	$guru = DB::table('guru')->get();
    	
        return view('admin.wali_kelas.create', ['guru' => $guru]);
    }

        public function store()
    {
        $walikelas = new WaliKelas;
        $walikelas->nip = request('id_guru');
        $walikelas->nama = request('id_kelas');
        //$guru->image = request()->file('image')->store('public/images');
        $guru->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/wali_kelas');
    }
}
