<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Mapel;

class MapelController extends Controller
{
    public function index()
    {
        $mapel = Mapel::all();
        return view('admin/mapel/mapel', ['mapel' => $mapel]);
    }
    
    /*public function show(mapel $id)
    {
        return view('mapel.show', ['mapel' => $id]);
    }*/
    
    public function create()
    {
        return view('admin/mapel/create');
    }

        public function store()
    {
        $mapel = new Mapel;
        
        $mapel->kode = request('kode');
        $mapel->nama = request('nama');
        // $mapel->email = request('email');
        // $mapel->alamat = request('alamat');
        // $mapel->tempat_lahir = request('tempat_lahir');
        // $mapel->tgl_lahir = request('tgl_lahir');
        // $mapel->no_telp = request('no_telp');
        //$mapel->image = request()->file('image')->store('public/images');
        $mapel->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/mapel');
    }
}