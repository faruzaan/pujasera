<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableUser extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_user', function (Blueprint $table) {
            $table->increments('id_user');
            $table->string('nama_user',100);
            $table->string('username_user',100);
            $table->string('password_user',100);
            $table->string('jk_user',1);
            $table->string('alamat_user',1000);
            $table->string('no_user',100);
            $table->enum('status_user',['Super Admin', 'Admin','Pemilik Toko','Kasir','Penjaga Toko']);
            $table->string('keterangan_user',100);
            $table->rememberToken();
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
        Schema::dropIfExists('tb_user');
    }
}
