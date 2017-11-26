<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Doktor extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'doktori';

    public function osoba(){
        return $this->belongsTo(Osoba::class, 'osoba_id');
    }

    public function vysetrenia(){
        return $this->hasMany(Vysetrenie::class);
    }

    public function oddelenie(){
        return $this->belongsTo(Oddelenie::class);
    }

    public function pobyty(){
        return $this->hasMany(Pobyt::class);
    }

}
