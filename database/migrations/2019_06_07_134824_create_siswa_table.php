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
            $table->integer('nis',11);
            $table->bigInteger('id_kelas')->unsigned()->nullable();
            $table->string('nama',100);
            $table->string('email',50);
            $table->date('tgl_lahir');
            $table->string('tmpt_lahir',20);
            $table->string('jk',20);
            $table->text('image')->nullable();
            $table->string('alamat',100);
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
