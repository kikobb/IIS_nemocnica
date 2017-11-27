<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vysetrenie extends Model
{
    //definovanie tabulky spojenej s modelom (implicitne k nazvu sa prida s a vyhlada tabulka)
    protected $table = 'vysetrenia';

    public function doktor(){
        return $this->belongsTo(User::class, 'doktor_id', 'id');
    }

    public function oddelenie(){
        return $this->belongsTo('App\Oddelenie');
    }

    public function pacient(){
        return $this->belongsTo(User::class, 'pacient_id', 'id');
    }

    public function podane_lieky(){
        return $this->hasMany('App\Podany_liek');
    }

}
