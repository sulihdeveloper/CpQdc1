<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrer extends Model
{
    protected $table = 'carrer';

    protected $fillable = [
        'first_name', 'last_name','email', 'phone','address','photo','file'
    ];
}
