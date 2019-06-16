<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\SiswaModel;

class SiswaController extends Controller
{
    function __contruct(){
        $siswa = SiswaModel::all();
    }

    public function index()
    {
        $siswa = SiswaModel::all();
        return view('admin/siswa/siswa', ['siswa' => $siswa]);
    }
    
    /*public function show(siswa $id)
    {
        return view('siswa.show', ['siswa' => $id]);
    }*/
    
    public function create()
    {
        return view('admin/siswa/create');
    }

        public function store()
    {
        $siswa = new SiswaModel;
        
        $siswa->nik = request('nik');
        $siswa->nama = request('nama');
        $siswa->email = request('email');
        $siswa->alamat = request('alamat');
        $siswa->jk = request('jk');
        $siswa->tmpt_lahir = request('tmpt_lahir');
        $siswa->tgl_lahir = request('tgl_lahir');
        $siswa->no_telp = request('no_telp');
        //$siswa->image = request()->file('image')->store('public/images');
        $siswa->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/siswa');
    }

        public function show($nik)
    {   
        $users = DB::select('select * from siswa where nik = ?',[$nik]);
        return view('admin.siswa.show',['users'=>$users]);

    }
    
}
