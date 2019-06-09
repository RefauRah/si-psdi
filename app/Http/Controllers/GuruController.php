<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Guru;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('admin/guru/guru', ['guru' => $guru]);
    }
    
    /*public function show(Guru $id)
    {
        return view('guru.show', ['guru' => $id]);
    }*/
    
    public function create()
    {
        return view('admin/guru/create');
    }

        public function store()
    {
        $guru = new Guru;
        
        $guru->nik = request('title');
        $guru->nama = request('publisher');
        $guru->email = request('email');
        $guru->alamat = request('alamat');
        $guru->tempat_lahir = request('tempat_lahir');
        $guru->tgl_lahir = request('tgl_lahir');
        $guru->no_telp = request('no_telp');
        //$guru->image = request()->file('image')->store('public/images');
        $guru->save();
    }
}
