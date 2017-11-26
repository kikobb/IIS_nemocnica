<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prijemca extends Model
{
    protected $table = 'prijemcovia';

    public static function create($osoba_id, $fillers){
        $prijemca = new Prijemca();


        $prijemca->osoba_id = $osoba_id;
        if (array_key_exists('cislo_uctu', $fillers)){
            $prijemca->cislo_uctu = $fillers['cislo_uctu'];
        }

        $prijemca->save();
    }

    public function osoba(){
        return $this->belongsTo(Osoba::class, 'osoba_id');
    }

    public function pobyty(){
        return $this->hasMany(Pobyt::class);
    }

}
