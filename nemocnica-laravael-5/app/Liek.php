<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Liek extends Model
{
    protected $fillable = [
        'nazov', 'ucinna_latka', 'kontraindikacia'
    ];

    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'lieky';

    public static function getAllLiekyToArr(){
        return Liek::pluck('nazov')->toArray();
    }

    public static function getIdFromName($name){
        $pom = Liek::where('nazov', $name)->first();
        return $pom->id;
    }

    public static function getLiekyByNazov($nazov){
        return Liek::where('nazov', $nazov);
    }

    public static function getLiekyByUcinnaLatka($ucinnaLatka) {
        return Liek::where('ucinna_latka', '=', $ucinnaLatka);
    }

    public function podane_lieky(){
        return $this->hasMany('App\Podany_liek');
    }

}
