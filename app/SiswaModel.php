<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    public $table = 'siswa';

    protected $fillable = [
    	'nik',
    	'nama',
    	'email',
    	'no_telp',
    	'tgl_lahir',
    	'tmpt_lahir',
    	'jk',
    	'alamat',
    	'created_at',
    	'updated_at'
    ];

    // public function get_absensi(){
    // 	return $this->hasMany('App\AbsensiModel','id_siswa');
    // }
}
