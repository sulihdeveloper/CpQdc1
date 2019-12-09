<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DynamicField extends Model
{
    protected $fillable = [
        'name', 'responsibilities','requerments','description','closing_date'
    ];

}
