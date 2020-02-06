<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPenjualan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_penjualan', function (Blueprint $table) {
            $table->string('id_penjualan');
            $table->string('id_pegawai');
            $table->dateTime('tgl_penjualan');
            $table->integer('total_harga');
            $table->integer('bayar');
            $table->integer('kembali');
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
        Schema::dropIfExists('tb_penjualan');
    }
}
