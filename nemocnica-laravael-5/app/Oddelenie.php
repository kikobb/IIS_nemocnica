<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Oddelenie extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'oddelenia';

    public function doktori(){
        return $this->hasMany('App\Doktor');
    }

    public function sestry(){
        return $this->hasMany('App\Sestra');
    }

    public function vysetrenia(){
        return $this->hasMany('App\Vysetrenie');
    }

    public function izby(){
        return $this->hasMany('App\Izba');
    }

}
