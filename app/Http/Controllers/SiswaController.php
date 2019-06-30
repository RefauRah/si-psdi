<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\SiswaModel;
use App\AbsensiSiswaSekolah;
use App\Kelas;
use PDF;

class SiswaController extends Controller
{
    function __contruct(){
        $siswa = SiswaModel::all();
    }

    public function index()
    {
        if(\Gate::allows('isPasca_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isPesantren')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isBimbel')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isSmarter')){
            abort(403,"Sorry, You can't access here");
        }
         elseif(\Gate::allows('isPra_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        $siswa = SiswaModel::all();
        $siswa = SiswaModel::with('kelas')->get();
        return view('admin/siswa/siswa', ['siswa' => $siswa]);
    }
    
    /*public function show(siswa $id)
    {
        return view('siswa.show', ['siswa' => $id]);
    }*/
    
    public function create()
    {
        if(\Gate::allows('isPasca_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isPesantren')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isBimbel')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isSmarter')){
            abort(403,"Sorry, You can't access here");
        }
         elseif(\Gate::allows('isPra_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isAdmin')){
            abort(403,"Sorry, You can't access here");
        }
        $kelas = Kelas::all();
        return view('admin/siswa/create', ['kelas' => $kelas]);
    }

    public function store(Request $request)
    {
        if(\Gate::allows('isPasca_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isPesantren')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isBimbel')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isSmarter')){
            abort(403,"Sorry, You can't access here");
        }
         elseif(\Gate::allows('isPra_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isAdmin')){
            abort(403,"Sorry, You can't access here");
        }
        $siswa = new SiswaModel;
        
        $siswa->nis = request('nis');
        $siswa->nama_siswa = request('nama_siswa');
        $siswa->email = request('email');
        $siswa->alamat_siswa = request('alamat_siswa');
        $siswa->jk_siswa = request('jk_siswa');
        $siswa->tmpt_lahir = request('tmpt_lahir');
        $siswa->tgl_lahir = request('tgl_lahir');
        $siswa->no_telp = request('no_telp');
        $siswa->id_kelas = request('id_kelas');
        // $siswa->ortu = request('ortu');
        // $siswa->emailortu = request ('emailortu');
       

        // $file = $request->file('image')->store('upload/images');  
        // $format = $request->file('image')->getClientOriginalExtension();
        // $siswa->image = $file;

        // $siswa->ortu = request('ortu');
        // $siswa->emailortu = request('emailortu');
        // $siswa->ortu = request('ortu');
        // $siswa->emailortu = request('emailortu');
        // $file = $request->file('image')->store('public/files/siswa');
        // $format = $request->file('image')->getClientOriginalExtension();
        // $siswa->image = $file;

        if(!is_null($request->file('image'))){
            $filename = $request->file('image')->hashName();
            $format = $request->file('image')->getClientOriginalExtension();
            $file = $request->file('image')->move('images/file',$filename);
            $siswa->image = $filename;
        }

        // $file = $request->file('image');
        // $ext = $file->getClientOriginalExtension();
        // $newName = rand(100000,1001238912).".".$ext;
        // $file->move('uploads/file',$newName);
        // $siswa->image = $newName;

        $siswa->save();
        \Session::flash('flash_message','successfully saved.');

        return redirect('/siswa');
    }
     
        public function show($nis)
    {   
        if(\Gate::allows('isPasca_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isPesantren')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isBimbel')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isSmarter')){
            abort(403,"Sorry, You can't access here");
        }
         elseif(\Gate::allows('isPra_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }

         $users = DB::table('siswa')
        ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id')
        ->select('siswa.*', 'kelas.kode_kelas', 'kelas.nama')
        ->where('siswa.nis', $nis)
        ->get(); 

        $hadirMax = DB::table('absensi_siswa_sekolah')
                     ->select(DB::raw('count(*) as absen_count'))
                     ->value('absen_count');;
        $hadirlist = DB::table('absensi_siswa_sekolah')
                     ->select(DB::raw('count(*) as absen_count'))
                     ->where('absen', '=', 'hadir')
                     // ->groupBy('status')
                     ->value('absen_count');
        $hadirPersen = ($hadirlist/$hadirMax)*100;
        // return $hadirPersen."%";
   
       return view('admin.siswa.show',['users'=>$users],['hadirPersen'=>$hadirPersen]);

    }

    public function hapus($nis)
    {
     if(\Gate::allows('isPasca_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isPesantren')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isBimbel')){
            abort(403,"Sorry, You can't access here");
        }
        elseif(\Gate::allows('isSmarter')){
            abort(403,"Sorry, You can't access here");
        }
         elseif(\Gate::allows('isPra_mubaligh')){
            abort(403,"Sorry, You can't access here");
        }  
        elseif(\Gate::allows('isAdmin')){
            abort(403,"Sorry, You can't access here");
        }
        DB::table('siswa')->where('nis',$nis)->delete();
        
        return redirect('/siswa');
    }

    public function edit ($nis)
    {
/*      
        $useredit = DB::select('select * from siswa where nis = ?',[$nis]);  


        return view('admin.siswa.edit',['useredit'=>$useredit]);
*/

       $kelas = Kelas::all();
       $useredit = DB::table('siswa')
        ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id')
        ->select('siswa.*', 'kelas.kode_kelas', 'kelas.nama', 'kelas.id')
        ->where('siswa.nis', $nis)
        ->get(); 
   
       return view('admin.siswa.edit',['useredit'=>$useredit], ['kelas'=>$kelas]);


    }

     public function editpilihankelas ()
    {

       $kelas = Kelas::all();
        return view('admin/siswa/edit', ['kelas' => $kelas]);


    }

    public function update(Request $request)
    {

        DB::table('siswa','kelas. *')->where('nis',$request->nis)->update([
        'nis' => $request->nis,
        'nama_siswa' => $request->nama_siswa,
        'id_kelas' => $request->id_kelas,
        'jk_siswa' => $request->jk_siswa,
        'alamat_siswa' => $request->alamat_siswa,
        'tmpt_lahir' => $request->tmpt_lahir,
        'tgl_lahir' => $request->tgl_lahir
        
        ]);


         return redirect('/siswa');
    }

   
    
}
