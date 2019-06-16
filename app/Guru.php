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
}
