<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PemilikGerai extends Model
{
    public $primaryKey = 'id_pemilik';

    protected $table = 'tb_pemilik_gerai';

    public $incrementing = false;

    protected $fillable = ['id_pemilik','nama_pemilik','alamat','no_tlp'];
}
