<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vysetrenie extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'vysetrenia';

    public static function getVysetreniaByTyp($typ){
        return Vysetrenie::where('typ', '=', $typ);
    }

    public static function getVysetreniaByDatum($datum){
        return Vysetrenie::where('created_at', '=', $datum);
    }

    public static function getVysetrenieByOddelenie($oddelenie){
        return Vysetrenie::where('oddelenie_id', '=', Oddelenie::getOddelenieByNazov($oddelenie));
    }


    public function getDoktor(){
        return $this->doktor()->first();
    }

    public function  getOddelenie(){
        return $this->oddelenie()->first();
    }

    public function getPacient(){
        return $this->pacient()->first();
    }

    public function getPodaneLiekyOnVysetrenieToArr(){
        $arr = Array();
        foreach ($this->podane_lieky()->get() as $podany_liek) {
            $arr[] = $podany_liek;
        }
        return $arr;
    }

    public function doktor(){
        return $this->belongsTo(User::class, 'doktor_id', 'id');
    }

    public function oddelenie(){
        return $this->belongsTo(Oddelenie::class);
    }

    public function pacient(){
        return $this->belongsTo(User::class, 'pacient_id', 'id');
    }

    public function podane_lieky(){
        return $this->hasMany(Podany_liek::class, 'vysetrenie_id', 'id');
    }

}
