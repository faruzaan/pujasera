<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gerai extends Model
{
    public $primaryKey = 'id_gerai';

    protected $table = 'tb_gerai';

    public $incrementing = false;

    protected $fillable = ['id_gerai','id_pemilik','nama_gerai','jenis_gerai'];
    
    public function pemilik()
    {
    	return $this->hasOne('\App\PemilikGerai','id_pemilik','id_pemilik');
    }
}
