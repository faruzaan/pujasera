<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbPembayaranFeeGerai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_pembayaran_fee_gerai', function (Blueprint $table) {
            $table->string('id_fee_gerai');
            $table->string('id_kerjasama');
            $table->dateTime('tgl_bagi_hasil');
            $table->integer('total_penjualan');
            $table->integer('uang_sewa_bagi_hasil');
            $table->string('status_dibayaran');
            $table->integer('fee_gerai');
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
        Schema::dropIfExists('tb_pembayaran_fee_gerai');
    }
}
