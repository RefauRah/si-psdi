<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Guru;
use App\Kelas;
use DB;

class WaliKelasController extends Controller
{
    
    public function index()
    {
        
        $guru = Guru::all();
        return view('admin/wali_kelas/wali_kelas', ['guru' => $guru]);
    }

    public function tambah()
    {
        $guru = DB::table('guru')->get();
        $kelas = DB::table('kelas')->get();

        return view('/admin/wali_kelas/create', ['guru' => $guru],['kelas'=>$kelas]);
    }

    public function update(Request $request)
    {

        DB::table('guru')->where('nip',$request->nip)->update([
        'id_kelas' => $request->id_kelas
        
        ]);


         return redirect('/walikelas');
    }

     public function hapus($guru)
    {
        DB::table('guru')->where('nip',$guru)->update([
        'id_kelas' =>''
        ]);
        
    // alihkan halaman ke halaman guru
        return redirect('/walikelas');
    }
}
