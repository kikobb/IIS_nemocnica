<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sestra extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'sestry';

    public static function remove($instance){
        $instance->delete();
    }

    public static function create($osoba_id, $fillers){
        $sestra = new Sestra();

        $sestra->osoba_id = $osoba_id;
        if (array_key_exists('cislo_uctu', $fillers)){
            $sestra->cislo_uctu = $fillers['cislo_uctu'];
        }
        if (array_key_exists('oddelenie_id', $fillers)){
            //todo skontorluj ci to dostava od registerForm
            $sestra->oddelenie_id = $fillers['oddelenie_id'];
        }

        $sestra->save();
    }

    public function osoba(){
        return $this->belongsTo(Osoba::class, 'osoba_id');
    }

    public function oddelenie(){
        return $this->belongsTo(Oddelenie::class);
    }

}
