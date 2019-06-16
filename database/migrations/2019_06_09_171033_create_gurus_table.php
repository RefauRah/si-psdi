<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGurusTable extends Migration
{
                   // <th>NO</th>
                   //  <th>NIP</th>
                   //  <th>Nama</th>
                   //  <th>Alamat</th>
                   //  <th>Tempat Lahir</th>
                   //  <th>Tanggal Lahir</th>
                   //  <th>No Tlp</th>
                   //  <th>Tanggal Masuk</th>
                   //  <th>Pendidikan Terakhir</th>
                   //  <th>Jabatan</th>
                   //  <th>Boarding/PP</th>
                   //  <th>Status Pernikahan</th>
                   //  <th>Jumlah Keluarga</th>
                   //  <th>Option</th>


    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('guru', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('nip', false, true)->length(20);
            $table->string('nama',100);
            $table->string('email',100);
            $table->string('alamat',200);
            $table->string('tempat_lahir',100);
            $table->date('tgl_lahir');
            $table->string('no_telp',20);
            $table->date('tgl_masuk');
            $table->string('pend_terakhir',20);
            $table->string('jabatan',100);
            $table->string('boarding',100);
            $table->string('status_nikah',100);
            $table->integer('jumlah_kel', false, true)->length(20);
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('guru');
    }
}
