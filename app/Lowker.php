<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lowker extends Model
{
    protected $table = 'lowker';

    protected $fillable = ['requerments','description','closing_date'];

}
