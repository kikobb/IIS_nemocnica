<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liek extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'lieky';

    public static function create($fillers){
        $liek = new Liek();

        if (array_key_exists('nazov', $fillers)){
            $liek->nazov = $fillers['nazov'];
        }
        if (array_key_exists('ucinna_latka', $fillers)){
            $liek->ucinna_latka = $fillers['ucinna_latka'];
        }
        if (array_key_exists('kontraindikacia', $fillers)){
            $liek->kontraindikacia = $fillers['kontraindikacia'];
        }

        $liek->save();
    }

    public function podane_lieky(){
        return $this->hasMany('App\Podany_liek');
    }

}
