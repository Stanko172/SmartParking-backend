<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    protected $table = "vozac";

    protected $fillable = [
        'korisnikID', 'autoID'
    ];
}
