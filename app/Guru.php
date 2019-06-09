<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    //
    public $table = 'guru';

        protected $fillable = [
    	'nik',
    	'nama',
    	'email',
    	'alamat',
    	'tempat_lahir',
    	'tgl_lahir',
    	'no_telp'
    ];

    public $timestamps = false;
}
