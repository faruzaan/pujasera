<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PemesananController extends Controller
{
    public function index()
    {
    	$data['result'] = DB::table('tb_pemesanan')
            ->join('tb_user', 'tb_pemesanan.id_user', '=', 'tb_user.id_user')
            ->join('tb_toko', 'tb_pemesanan.id_toko', '=', 'tb_toko.id_toko')
            ->join('tb_item', 'tb_pemesanan.id_item', '=', 'tb_item.id_item')
            ->select('tb_pemesanan.*', 'tb_user.nama_user', 'tb_toko.nama_toko','tb_item.nama_item','tb_item.harga_item')
            ->get();
    	return view('pemesanan/index')->with($data);
    }
    public function create()
    {
        $data['rows'] = \App\Item::all();
        return view('pemesanan/form')->with($data);
    }
}
