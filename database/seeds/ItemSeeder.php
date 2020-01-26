<?php

use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $item = new \App\Item;
        $item->id_toko="1";
        $item->nama_item="Ayam Goreng";
        $item->harga_item="10000";
        $item->ket_item="Makanan";
        $item->save();
    }
}
