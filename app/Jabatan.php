<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    public $primaryKey = 'id_jabatan';

    protected $table = 'tb_jabatan';

    protected $fillable = ['id_jabatan','nama_jabatan'];

    public $incrementing = false;
}
