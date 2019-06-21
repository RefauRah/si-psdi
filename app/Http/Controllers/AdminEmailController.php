<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Mail\AdminEmail;
use Illuminate\Support\Facades\Mail;

class AdminEmailController extends Controller
{
    public function index(){
 
		Mail::to("galangsatria071@gmail.com")->send(new AdminEmail());

		Route::get('/notif', function() {
    	$user = \App\SiswaModel::first();
    	$user->notify(new \App\Notifications\Daftar);
});
 
		return "Email dikirim";
 
	}
}