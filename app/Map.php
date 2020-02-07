<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Map extends Model
{
    protected $fillable = [
     'name', 'tower', 'lat', 'lng', 'alamat', 'provinsi'
    ];
}
