<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    public $primaryKey = 'id_user';

    protected $table = 'tb_user';

    protected $fillable = ['nama_user','username','password','jk_user','alamat_user','no_user','status_user','keterangan_user'
	];
}
