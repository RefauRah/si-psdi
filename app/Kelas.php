<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    public $table = 'kelas';

    protected $fillable = [
    	'kode_kelas',
    	'nama'
    ];

    public $timestamps = false;
}
