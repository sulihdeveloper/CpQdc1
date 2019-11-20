<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clien extends Model
{
    protected $table = 'clien';

    protected $fillable = [
        'name', 'photo'
    ];
}
