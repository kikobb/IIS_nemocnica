<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sestra extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'sestry';

    public function osoba(){
        return $this->belongsTo('App\Osoba', 'osoba_id_rodne_cislo');
    }

    public function oddelenie(){
        return $this->belongsTo('App\Oddelenie');
    }

}
