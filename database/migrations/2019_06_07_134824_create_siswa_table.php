<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('siswa', function (Blueprint $table) {
            // $table->bigIncrements('id_siswa');
            $table->bigInteger('nis',20);
            $table->bigInteger('id_kelas')->unsigned()->nullable();
            $table->string('nama_siswa',100);
            $table->string('email',50);
            $table->date('tgl_lahir');
            $table->string('tmpt_lahir',20);
            $table->string('jk_siswa',20);
            $table->text('image')->nullable();
            $table->string('alamat_siswa',100);
            $table->string('no_telp',20);
            // $table->string('ortu',100);
            // $table->string('emailortu',50);
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
        Schema::dropIfExists('siswa');
    }
}
