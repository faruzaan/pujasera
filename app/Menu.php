<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    public $primaryKey = 'id_menu';

    protected $table = 'tb_menu';

    public $incrementing = false;

    protected $fillable = ['id_menu','id_gerai','nama_menu','harga_menu','status_menu','gambar_menu'];
    
    public function gerai()
    {
    	return $this->hasOne('\App\Gerai','id_gerai','id_gerai');
    }
}
