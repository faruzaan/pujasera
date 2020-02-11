<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    public $primaryKey = 'id_pegawai';

    protected $table = 'tb_pegawai';

    public $incrementing = false;

    protected $fillable = ['id_pegawai','id_jabatan','nama_pegawai','alamat_pegawai','nomer_tlp','username','password','status_pegawai'];
    
    public function jabatan()
    {
    	return $this->hasOne('\App\Jabatan','id_jabatan','id_jabatan');
    }
}
