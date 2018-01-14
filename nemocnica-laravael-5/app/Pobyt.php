<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pobyt extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'pobyty';

    public static function getPobytyByDatumPrichodu($datum){
        return Pobyt::where('datum_prichodu', '=', $datum);
    }

    public static function getPobytyByDatumOdchodu($datum){
        return Pobyt::where('datum_odchodu', '=', $datum);
    }

    public static function getPobytById($id){
        return Pobyt::where('id', '=', $id)->first();
    }


    public function getDoktor(){
        return $this->doktor()->first();
    }

    public function getPrijemca(){
        return $this->prijemca()->first();
    }

    public function getPacient(){
        return $this->pacient()->first();
    }

    public function getIzba(){
        return $this->izba()->first();
    }

    public function getMyOddelenie(){
        return $this->izba()->first()->getMyOddelenie();
    }


    public function doktor(){
        return $this->belongsTo(User::class, 'doktor_id', 'id');
    }

    public function pacient(){
        return $this->belongsTo(User::class, 'pacient_id', 'id');
    }

    public function prijemca(){
        return $this->belongsTo(User::class, 'prijemca_id', 'id');
    }

    public function izba()
    {
        return $this->belongsTo(Izba::class);
    }

}
