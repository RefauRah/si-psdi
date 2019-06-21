<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Kelas;
use App\SiswaModel;
use DB;

class KelasController extends Controller
{
    public function index()
    {
        $kelas = Kelas::all();
        return view('admin/kelas/kelas', ['kelas' => $kelas]);
    }
    
    public function show(Kelas $id)
    {
        $siswa = DB::select('select * from siswa where id_kelas = ?', [$id->value('id')]);
        return view('admin.kelas.show', ['kelas' => $id], ['siswa' => $siswa]);
    }
    
    public function create()
    {
        return view('admin/kelas/create');
    }

        public function store()
    {
        $kelas = new Kelas;
        
        $kelas->kode_kelas = request('kode_kelas');
        $kelas->nama = request('nama');
        $kelas->jenis_kelas = request('jenis_kelas');
        $kelas->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/kelas');
    }
}
