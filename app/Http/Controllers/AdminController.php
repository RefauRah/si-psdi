<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Admin;

class AdminController extends Controller
{
	protected $guard = 'admin';

    protected $redirectTo = '/admin';

public function __construct()
{
    $this->middleware('guest:admin')->except('logout')->except('index');
}

public function index(){
      return view('admin');
}

public function showLoginForm()
{
      return view('auth.adminLogin');
}

public function showRegisterForm()
{
      return view('auth.adminregister');
}

public function username()
{
        return 'username';
}

// protected function guard()
// {
//       return Auth::guard('admin');
//       return auth()->guard('admin');
// }

public function login(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password ])) {
            return redirect()->route('admin.home');
        }
        return back()->withErrors(['email' => 'Email or password are wrong.']);
    }

public function register(Request $request)
{
      $request->validate([
          'name'      => 'required|string|max:199',
          'email'         => 'required|string|email|max:255|unique:admins',
          'password'      => 'required|string|min:6|confirmed'
      ]);
     \App\Admin::create($request->all());
      return redirect()->route('admin.registerform')->with('success', 'Successfully register!');
}
}