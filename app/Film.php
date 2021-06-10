<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = [
        'film',
        'kode_film',
        'judul_film',
        'genre_film',  
    ];
}
