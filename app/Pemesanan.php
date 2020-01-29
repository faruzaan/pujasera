<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    public $primaryKey = 'id_pemesanan';

    protected $table = 'tb_pemesanan';

    protected $fillable = ['nama_pemesan','id_user','id_toko','id_item','jumlah','status_pemesanan'];
}
