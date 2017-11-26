<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prijemca extends Model
{
    protected $table = 'prijemcovia';

    public function osoba(){
        return $this->belongsTo(Osoba::class, 'osoba_id');
    }

    public function pobyty(){
        return $this->hasMany(Pobyt::class);
    }

}
