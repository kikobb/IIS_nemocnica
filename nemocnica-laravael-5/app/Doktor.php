<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App;

class Doktor extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'doktori';

    public static function create($osoba_id, $fillers){
        $doktor = new Doktor();

        $doktor->osoba_id = $osoba_id;
        if (array_key_exists('uvazok', $fillers)){
            $doktor->uvazok = $fillers['uvazok'];
        }
        if (array_key_exists('cislo_uctu', $fillers)){
            $doktor->cislo_uctu = $fillers['cislo_uctu'];
        }
        if (array_key_exists('telefon', $fillers)){
            $doktor->telefon = $fillers['telefon'];
        }
        if (array_key_exists('oddelenie_id', $fillers)){
            $doktor->oddelenie_id = $fillers['oddelenie_id'];
        }

        $doktor->save();
    }

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
