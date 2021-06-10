<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dishub extends Model
{
    protected $fillable = [
        'no',
        'nama_mobil',
        'plat_nomer',
        'merek',
        'nama_pemlik',  
    ];
}
