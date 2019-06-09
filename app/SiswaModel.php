<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SiswaModel extends Model
{
    public $table = 'siswa';

    // protected $primaryKey = 'id_siswa';

    protected $fillable = [
    	'nim',
    	'nama',
    	'created_at',
    	'updated_at'
    ];

    // public function get_absensi(){
    // 	return $this->hasMany('App\AbsensiModel','id_siswa');
    // }
}
