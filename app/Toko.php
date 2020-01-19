<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    public $primaryKey = 'id_toko';

    protected $table = 'tb_toko';

    protected $fillable = ['nama_toko','pemilik_toko','no_toko'];
}
