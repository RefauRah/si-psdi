<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class PagesController extends Controller{

  public function index(){
    return view('ajaxget');
  }

  public function getUsers($id = 0){
    // Fetch all records
    $userData['data'] = Page::getuserData($id);

    echo json_encode($userData);
    exit;
  }
}