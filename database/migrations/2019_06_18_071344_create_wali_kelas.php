<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWaliKelas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('walikelas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_guru')->unsigned();
            $table->bigInteger('id_kelas')->unsigned();
            $table->timestamps();

            $table->foreign('id_guru')->references('id')->on('guru')->onDelete('cascade');
            $table->foreign('id_kelas')->references('id')->on('kelas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wali_kelas');
    }
}
