<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\SiswaModel;
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
        // $siswa = SiswaModel::all();
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
        $siswa->nama = request('nama');
        $siswa->email = request('email');
        $siswa->alamat = request('alamat');
        $siswa->jk = request('jk');
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
            $file = $request->file('image')->store('public/files/siswa');
            $filename = $request->file('image')->hashName();
            $format = $request->file('image')->getClientOriginalExtension();
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
        $users = DB::select('select * from siswa where nis = ?',[$nis]);     
/*        $walikelas = DB::select('select * from walikelas where nip = ?',[$nip]);*/

        // $siswa= DB::table('siswa')
        // ->join('keuangan as money','siswa.id_siswa','=','money.id_siswa')
        // ->select('money.pembayaran as mp')->get();

        // $filterKeyword = $request->get('keyword');

        // if($filterKeyword){
        //     $siswa= DB::table('siswa')
        //     ->join('keuangan as money','siswa.id_siswa','=','money.id_siswa')
        //     ->select('money.pembayaran as mp')->where('siswa.id_siswa', 'LIKE', "%filterKeyword%")->get();
        // }

        // $users =SiswaModel::with('keuangan')->get();

        return view('admin.siswa.show',['users'=>$users]);

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


   
    
}
