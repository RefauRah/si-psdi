<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Guru;
use PDF;
use DB;


class GuruController extends Controller
{
    public function index()
    {
        if(!\Gate::allows('isSuper_admin')||\Gate::allows('isBimbel')){
            abort(403,"Sorry, You can't access here");
        }
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

        public function store(Request $request)
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
        if(!is_null($request->file('image'))){
            $file = $request->file('image')->store('public/files/guru');
            $filename = $request->file('image')->hashName();
            $format = $request->file('image')->getClientOriginalExtension();
            $guru->image = $filename;
        }

        $guru->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/guru');
    }

    // public function edit(Guru $id){
    //     $guru = Guru::all();
    //     return view('admin.guru.show', ['guru' => $id]);
    // }

    public function edit(Guru $id)
    {
        return view('admin.guru.edit', ['guru' => $id]);
    }

    public function update(Request $request){
        // \Session::flash('flash_message','successfully saved.');
        return view('admin.guru.edit', ['guru' => $id]);
    }

    public function cetak_pdf()
    {
        $guru= Guru::all();

        $gpdf = PDF::loadview('admin/guru/guruPDF',['guru'=>$guru]);
        return $gpdf->download('daftar-guru-'.date("Y/m/d").':'.date("H/i/s").'.pdf');
    }

    public function cetak_profil_pdf(Guru $id)
    {
        // return $id;
        $gpdf = PDF::loadview('admin/guru/profilguruPDF',['guru'=>$id]);
        return $gpdf->download('profil-guru-'.$id->value("nama")."-".date("Y/m/d").':'.date("H/i/s").'.pdf');
    }
}
