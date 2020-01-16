<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class capability extends Model
{
    protected $table = 'capability';

    protected $fillable = [
        'judul', 'isi','image'
    ];
}
