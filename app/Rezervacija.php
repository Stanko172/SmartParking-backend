<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RezervacijaController extends Model
{
    protected $table = 'rezervacija';

    protected $fillable = [
        'parking_mjesto_id', 
        'vozac_id', 
        'cijena', 
        'vrijeme_rezervacije'
    ];
}
