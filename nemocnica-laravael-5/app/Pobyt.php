<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pobyt extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'pobyty';

    public function doktor(){
        return $this->belongsTo('App\Doktor');
    }

    public function pacient(){
        return $this->belongsTo('App\Pacient');
    }

    public function prijemca(){
        return $this->belongsTo('App\Prijemca');
    }

    public function izba(){
        return $this->belongsTo('App\Izba');
    }

}
