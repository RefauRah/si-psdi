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
        // $walikelas = WaliKelas::all();
        $walikelas = WaliKelas::with('guru', 'kelas')->get();
        // return $walikelas;
        // Fare::find($id)->with('payment')->get()
        return view('admin.wali_kelas.wali_kelas', ['walikelas' => $walikelas]);
    }
    
    // public function show(Guru $id)
    // {
    //     return view('admin.wali_kelas.show', ['walikelas' => $id]);
    // }
    
    public function create()
    {
    	$guru = DB::table('guru')->get();
    	$kelas = DB::table('kelas')->get();
        return view('admin.wali_kelas.create', ['guru' => $guru], ['kelas' => $kelas]);
    }

    public function store()
    {
        $walikelas = new WaliKelas;
        $walikelas->id_guru = request('id_guru');
        $walikelas->id_kelas = request('id_kelas');
        $walikelas->save();

        // \Session::flash('flash_message','successfully saved.');

        return redirect('/walikelas');
    }
}
