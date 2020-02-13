<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $primaryKey = 'id';

    protected $table = 'tb_feedback';

    protected $fillable = ['nama_pelanggan','email','feedback_pelanggan','service_rating'];
}
