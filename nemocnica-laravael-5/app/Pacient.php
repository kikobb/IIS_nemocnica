<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pacient extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'pacienti';

    public static function remove($instance){
        $instance->delete();
    }

    public static function create($osoba_id, $fillers){
        $pacient = new Pacient();

        $pacient->osoba_id = $osoba_id;
        if (array_key_exists('cislo_poistovne', $fillers)){
            $pacient->cislo_poistovne = $fillers['cislo_poistovne'];
        }

        $pacient->save();
    }

    public function osoba(){
        return $this->belongsTo(Osoba::class, 'osoba_id');
    }

    public function vysetrenia(){
        return $this->hasMany(Vysetrenie::class);
    }

    public function pobyty(){
        return $this->hasMany(Pobyt::class);
    }

}
