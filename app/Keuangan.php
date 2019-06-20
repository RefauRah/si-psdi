<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Keuangan extends Model
{
    public $table = 'Keuangan';

    protected $fillable = [
    	'pembayaran'
    ];

    public function siswa()
    {
        return $this->belongsTo('App\SiswaModel', 'id_siswa','id_siswa');
    }
}
