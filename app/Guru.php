<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //
    public $table = 'guru';

        protected $fillable = [
    	'nip',
    	'nama',
    	'email',
    	'alamat',
    	'tempat_lahir',
    	'tgl_lahir',
    	'no_telp',
    	'tgl_masuk',
        'pend_terakhir',
        'jabatan',
        'boarding',
        'status_nikah',
        'jumlah_kel'
    ];

    public function waliKelas()
    {
        return $this->hasOne('App\WaliKelas', 'id_guru', 'id');
        // return $this->hasOne('App\UserProfile', 'profile_user_id', 'user_id');
    }
}
