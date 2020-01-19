<?php

use Illuminate\Database\Seeder;

class TokoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $toko = new \App\Toko;
        $toko->nama_toko="CFC";
        $toko->pemilik_toko="Ridat";
        $toko->no_toko="1";
        $toko->save();
    }
}
