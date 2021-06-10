<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UTS extends Model
{
    protected $fillable = [
        'mata_kuliah',
        'nama_dosen',
        'nip',
        'hari',  
    ];
}

