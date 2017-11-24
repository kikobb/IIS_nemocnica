<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Izba extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'izby';

    public function oddelenie(){
        return $this->belongsTo('App\Oddelenie');
    }

    public function pobyty(){
        return $this->hasMany('App\Pobyt');
    }

}
