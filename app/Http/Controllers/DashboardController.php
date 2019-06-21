<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Admin;
class DashboardController extends Controller
{
    public function index()
    {
        $dashboard = Admin::all();
        return view('admin/admin/admin', ['Admins' => $dashboard]);
    }
    
    /*public function show(kelas $id)
    {
        return view('kelas.show', ['kelas' => $id]);
    }*/
    
    public function create()
    {
        return view('admin/admin/create');
    }

        public function store()
    {
        $dashboard = new Admin;
        
        $dashboard->name = request('name');
        $dashboard->email = request('email');
        $dashboard->password = request('password');
        $dashboard->save();

        \Session::flash('flash_message','successfully saved.');

        return redirect('/admin');
    }
}
