<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Kelas;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('admin/kelas/kelas', ['kelas' => $kelas]);
    }
    
    /*public function show(kelas $id)
    {
        return view('kelas.show', ['kelas' => $id]);
    }*/
    
    public function create()
    {
        return view('admin/kelas/create');
    }

        public function store()
    {
        $kelas = new Kelas;
        
        $kelas->kode_kelas = request('kode_kelas');
        $kelas->nama = request('nama');
        $kelas->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/kelas');
    }
}
