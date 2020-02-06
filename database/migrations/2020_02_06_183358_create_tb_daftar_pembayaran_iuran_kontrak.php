<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbDaftarPembayaranIuranKontrak extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_daftar_pembayaran_iuran_kontrak', function (Blueprint $table) {
            $table->string('id_dafter_pembayaran');
            $table->string('id_kerjasama');
            $table->dateTime('tgl_pembayaran');
            $table->integer('jumlah_pembayaran_yg_dibayar');
            $table->integer('periode_bulan');
            $table->integer('periode_tahun');
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
        Schema::dropIfExists('tb_daftar_pembayaran_iuran_kontrak');
    }
}
