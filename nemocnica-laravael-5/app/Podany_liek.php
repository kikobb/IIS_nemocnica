<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Podany_liek extends Model
{
    protected $table = 'podane_lieky';

    public function vysetrenie(){
        return $this->belongsTo('App\Vysetrenie');
    }

    public function liek(){
        return $this->belongsTo('App\Vysetrenie');
    }

}
