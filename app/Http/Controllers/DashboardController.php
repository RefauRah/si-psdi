<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
use DB;
class DashboardController extends Controller
{
    public function index()
    {
        $user = User::all();
        return view('admin/admin/admin', ['user' => $user]);
    }
    
    /*public function show(kelas $id)
    {
        return view('kelas.show', ['kelas' => $id]);
    }*/
    
    public function create()
    {
        return view('admin/admin/create');
    }

    public function store(Request $request)
    {

        date_default_timezone_set("Asia/Bangkok");
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>bcrypt ($request->password),
            'user_type'=>$request->user_type
        ]);

        \Session::flash('flash_message','successfully saved.');
        return redirect('/admin');

    }

    public function hapus($user)
    {
        DB::table('users')->where('id',$user)->delete();
        
    // alihkan halaman ke halaman guru
        return redirect('/admin');

    }

    // method untuk edit data pegawai
    public function edit($user)
    {
        // mengambil data pegawai berdasarkan id yang dipilih
        DB::table('users')->where('id',$user)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('/admin/admin/edit',['users' => $user]);

    }

    public function update(Request $request)
    {
    // update data pegawai
    date_default_timezone_set("Asia/Bangkok");
    DB::table('users')->where('id',$request->id)->update([
        'name'=>$request->name,
        'email'=>$request->email,
        'password'=>bcrypt ($request->password),
        'user_type'=>$request->user_type
    ]);
    // alihkan halaman ke halaman pegawai
    return redirect('/admin');
}
}
