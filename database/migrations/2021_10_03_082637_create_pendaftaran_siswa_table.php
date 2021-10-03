<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePendaftaranSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pendaftaran_siswa', function (Blueprint $table) {
            $table->integer('nim')->primary();
            $table->String('nama_mahasiswa', 250);
            $table->String('tempat_lahir', 100);
            $table->date('tanggal_lahir');
            $table->String('alamat', 100);
            $table->String('no_telp', 15);
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
        Schema::dropIfExists('pendaftaran_siswa');
    }
}
