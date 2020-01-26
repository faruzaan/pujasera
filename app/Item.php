<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public $primaryKey = 'id_item';

    protected $table = 'tb_item';

    protected $fillable = ['id_toko','nama_item','harga_item','ket_item'];
}
