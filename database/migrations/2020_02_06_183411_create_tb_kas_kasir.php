<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbKasKasir extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kas_kasir', function (Blueprint $table) {
            $table->string('id_kas_kasir');
            $table->string('id_pegawai');
            $table->string('status_pegawai');
            $table->integer('kas_awal');
            $table->integer('kas_akhir');
            $table->dateTime('tgl_kas_kasir');
            $table->string('shift');
            $table->integer('uang_kas_seharusnya');
            $table->dateTime('jam_buka');
            $table->dateTime('jam_tutup');
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
        Schema::dropIfExists('tb_kas_kasir');
    }
}
