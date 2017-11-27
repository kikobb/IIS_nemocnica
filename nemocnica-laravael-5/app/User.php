<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public static function remove($instance){
        $instance->delete();
    }

    public static function getUserById($id){
        return User::where('id', $id)->first();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    //väzba
    public function osoba() {
        return $this->hasOne('App\Osoba');
    }

    public function getTyp_ulohy(){
        $this->osoba()->first()->typ_ulohy()->first()->getName();
    }

    public function isAdmin() {
        return ($this->osoba()->first()->typ_ulohy()->first()->getName() == 'admin');
    }

    public function isDoktor(){
        return ($this->osoba()->first()->typ_ulohy()->first()->getName() == 'doktor');
    }

    public function isSestra(){
        return ($this->osoba()->first()->typ_ulohy()->first()->getName() == 'sestra');
    }

    public function isPrijemca(){
        return ($this->osoba()->first()->typ_ulohy()->first()->getName() == 'prijemca');
    }

    public function isPacient(){
        return ($this->osoba()->first()->typ_ulohy()->first()->getName() == 'pacient');
    }

}
