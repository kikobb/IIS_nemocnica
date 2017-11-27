<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oddelenie extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'oddelenia';

    public static function create($fillers){
        $oddelenie = new Oddelenie();
        if (array_key_exists('nazov', $fillers)){
            $oddelenie->nazov = $fillers['nazov'];
        }
        if (array_key_exists('poschodie', $fillers)){
            $oddelenie->poschodie = $fillers['poschodie'];
        }
        $oddelenie->save();
    }

    public static function getIdFromName($name){
        $pom = Oddelenie::where('nazov', $name)->first();
        return $pom->id;
    }

    public static function getAllNamesToArr(){
        return Oddelenie::pluck('nazov')->toArray();
    }

    public function doktori()
    {
        return $this->hasMany(User::class, 'oddelenie_doktor_id', 'id');
    }

    public function sestry()
    {
        return $this->hasMany(User::class, 'oddelenie_sestra_id', 'id');
    }

    public function vysetrenia()
    {
        return $this->hasMany(Vysetrenie::class);
    }

    public function izby()
    {
        return $this->hasMany(Izba::class);
    }

}
