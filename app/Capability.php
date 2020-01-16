<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class capability extends Model
{
    protected $table = 'news';

    protected $fillable = [
        'judul', 'isi','image'
    ];
}
