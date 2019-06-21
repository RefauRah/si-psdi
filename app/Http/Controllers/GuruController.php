<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Guru;
use PDF;

class GuruController extends Controller
{
    public function index()
    {
        $guru = Guru::all();
        return view('admin/guru/guru', ['guru' => $guru]);
    }
    
    public function show(Guru $id)
    {
        return view('admin.guru.show', ['guru' => $id]);
    }
    
    public function create()
    {
        return view('admin/guru/create');
    }

        public function store()
    {
        $guru = new Guru;
        $guru->nip = request('nip');
        $guru->nama = request('nama');
        $guru->email = request('email');
        $guru->alamat = request('alamat');
        $guru->tempat_lahir = request('tempat_lahir');
        $guru->tgl_lahir = request('tgl_lahir');
        $guru->no_telp = request('no_telp');
        $guru->tgl_masuk = request('tgl_masuk');
        $guru->pend_terakhir = request('pend_terakhir');
        $guru->jabatan = request('jabatan');
        $guru->boarding = request('boarding');
        $guru->status_nikah = request('status_nikah');
        $guru->jumlah_kel = request('jumlah_kel');
        //image
        //$guru->image = request()->file('image')->store('public/images');
        $guru->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/guru');
    }

    public function cetak_pdf()
    {
        $guru= Guru::all();

        $gpdf = PDF::loadview('admin/guru/guruPDF',['guru'=>$guru]);
        return $gpdf->download('laporan-guru-pdf');
    }
}
