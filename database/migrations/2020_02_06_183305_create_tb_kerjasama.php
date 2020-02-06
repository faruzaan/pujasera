<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbKerjasama extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_kerjasama', function (Blueprint $table) {
            $table->string('id_kerjasama');
            $table->string('id_gerai');
            $table->string('id_jenis_kerjasama');
            $table->dateTime('tgl_mulai');
            $table->dateTime('tgl_akhir');
            $table->decimal('persentase_bagi_hasil',5,2);
            $table->integer('uang_jaminan_bagi_hasil');
            $table->integer('uang_sewa_kontrak');
            $table->integer('uang_jaminan_sewa_kontrak');
            $table->integer('uang_iuran_perbulan');
            $table->string('status_kerjasama');
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
        Schema::dropIfExists('tb_kerjasama');
    }
}
