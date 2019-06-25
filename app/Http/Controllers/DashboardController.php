<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\User;
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
            'username' =>$request->username,
            'email'=>$request->email,
            'password'=>bcrypt ($request->password),
            'user_type'=>$request->user_type
        ]);

        \Session::flash('flash_message','successfully saved.');
        return redirect('/admin');

        \Session::flash('flash_message','successfully saved.');

    }
}
