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
        // 'ortu',
        // 'emailortu',
    	'created_at',
    	'updated_at'
    ];

    public function keuangan()
    {
        return $this->hasMany('App\Keuangan', 'id_siswa','id_siswa');
    }

    // public function get_absensi(){
    // 	return $this->hasMany('App\AbsensiModel','id_siswa');
    // }
}
