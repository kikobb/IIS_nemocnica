<?php

namespace App;

use Illuminate\Database\Query\Builder;
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

    public static function getUserByRodneCislo($rcislo){
        return User::where('rodne_cislo', $rcislo)->first();
    }

//    public static function getAllDoctors(){
//        return User::where('pozicia', 'doktor');
//    }

    public function scopeGetAllUsersByPozicia($query, $poz){
        return $query->where('pozicia', '=', $poz);
    }


    public function scopeGetAllNamesToArr($query){
        return $query->pluck('meno')->toArray();
    }
    /**
     * @param $query Builder
     * @param $meno
     */
    public function scopeDoctorFilterByName($query, $meno)
    {
        $query->where('pozicia', '=', 'doktor')->where('meno', 'like', '%'.$meno.'%');
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


    public function isAdmin() {
        return ($this->pozicia == 'admin');
    }

    public function isDoktor(){
        return ($this->pozicia == 'doktor');
    }

    public function isSestra(){
        return ($this->pozicia == 'sestra');
    }

    public function isPrijemca(){
        return ($this->pozicia == 'prijemca');
    }

    public function isPacient(){
        return ($this->pozicia == 'pacient');
    }

}
