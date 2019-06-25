<?php

namespace App;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;

class Page extends Model {
  public static function getuserData($id=0){

    if($id==0){
      $value=DB::table('siswa')->orderBy('id_kelas', 'asc')->get(); 
    }else{
      // $value=DB::table('siswa')->where('id_kelas', $id)->first();
      $value=DB::table('siswa')->where('id_kelas', $id)->get();
    }
    return $value;
  
  }
}