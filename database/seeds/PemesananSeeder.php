<?php

use Illuminate\Database\Seeder;

class PemesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pesan = new \App\Pemesanan;
        $pesan->nama_pemesan = 'Feni';
        $pesan->id_user = '1';
        $pesan->id_toko = '1';
        $pesan->id_item = '1';
        $pesan->jumlah = 2;
        $pesan->status_pemesanan = 'Belum Dibayar';
        $pesan->save();
    }
}
