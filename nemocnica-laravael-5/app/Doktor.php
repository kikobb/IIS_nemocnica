<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Doktor extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'doktori';

    public function osoba(){
        return $this->belongsTo('App\Osoba', 'osoba_id_rodne_cislo');
    }

    public function vysetrenia(){
        return $this->hasMany('App\Vysetrenie');
    }

    public function oddelenie(){
        return $this->belongsTo('App\Oddelenie');
    }

    public function pobyty(){
        return $this->hasMany('App\Pobyt');
    }

}
