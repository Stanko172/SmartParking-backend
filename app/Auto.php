<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    protected $table = "auto";

    protected $fillable = [
        'naziv', 'registracija', 'proizvodacID'
    ];
}
