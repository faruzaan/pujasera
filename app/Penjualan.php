<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Penjualan extends Model
{
    public $primaryKey = 'id_penjualan';

    protected $table = 'tb_penjualan';

    public $incrementing = false;

    protected $fillable = ['id_penjualan','id_pegawai','tgl_penjualan','total_harga','bayar','kembali'];

    public function pegawai()
    {
    	return $this->hasOne('\App\Pegawai','id_pegawai','id_pegawai');
    }
}
