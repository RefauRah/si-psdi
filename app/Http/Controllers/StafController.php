<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Staf;
use PDF;
use DB;


class StafController extends Controller
{
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
        // elseif(!\Gate::allows('isBimbel')){
        //     abort(403,"Sorry, You can't access here");
        // }
        // else{
        //     return redirect('/home');
        // }
        $staf = Staf::all();
        return view('admin/staf/staf', ['staf' => $staf]);
    }
    
    public function show(Staf $nip_staf)
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
        return view('admin.staf.show', ['staf' => $nip_staf]);
    }
    
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
        return view('admin/staf/create');
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
        $staf = new Staf;
        $staf->nip_staf = request('nip_staf');
        $staf->nama_staf = request('nama_staf');
        $staf->email_staf = request('email_staf');
        $staf->alamat_staf = request('alamat_staf');
        $staf->tempat_lahir_staf = request('tempat_lahir_staf');
        $staf->tgl_lahir_staf = request('tgl_lahir_staf');
        $staf->no_telp_staf = request('no_telp_staf');
        $staf->tgl_masuk_staf = request('tgl_masuk_staf');
        $staf->pend_terakhir_staf = request('pend_terakhir_staf');
        $staf->jabatan_staf = request('jabatan_staf');
        $staf->boarding_staf = request('boarding_staf');
        $staf->status_nikah_staf = request('status_nikah_staf');
        $staf->jumlah_kel_staf = request('jumlah_kel_staf');
        if(!is_null($request->file('image'))){
            $file = $request->file('image')->store('public/files/staf');
            $filename = $request->file('image')->hashName();
            $format = $request->file('image')->getClientOriginalExtension();
            $staf->image = $filename;
        }

        $staf->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/staf');
    }

    // public function edit(staf $id){
    //     $staf = staf::all();
    //     return view('admin.staf.show', ['staf' => $id]);
    // }

    public function edit(Staf $nip_staf)
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
        return view('admin.staf.edit', ['staf' => $nip_staf]);
    }

    public function update(Request $request){
        // \Session::flash('flash_message','successfully saved.');
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
        return view('admin.staf.edit', ['staf' => $nip_staf]);
    }

    public function cetak_pdf()
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
        $staf= staf::all();

        $gpdf = PDF::loadview('admin/staf/stafPDF',['staf'=>$staf]);
        return $gpdf->download('daftar-staf-'.date("Y/m/d").':'.date("H/i/s").'.pdf');
    }

    public function cetak_profil_pdf(Staf $nip_staf)
    {
        // return $id;
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
        $gpdf = PDF::loadview('admin/staf/profilstafPDF',['staf'=>$nip_staf]);
        return $gpdf->download('profil-staf-'.$nip->value("nama")."-".date("Y/m/d").':'.date("H/i/s").'.pdf');
    }
    public function hapus($staf)
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
        DB::table('staf')->where('nip_staf',$staf)->delete();
        
    // alihkan halaman ke halaman staf
        return redirect('/staf');
    }
}
