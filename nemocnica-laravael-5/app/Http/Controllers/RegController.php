<?php

namespace App\Http\Controllers;

use App\Doktor;
use App\Osoba;
use App\Pacient;
use App\Prijemca;
use App\Sestra;
use App\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class RegController extends Controller
{
    public static $current_view = 'admin_registracia_zamestnanec';

    public function showRegistrationFormAdmin()
    {
        //todo porob podobne funkcie aj na ine
        RegController::$current_view = 'admin_registracia_zamestnanec';
        return view('admin_registracia_zamestnanec');
    }

    public function showRegistrationFormOddelenie()
    {
        //todo porob podobne funkcie aj na ine
//        RegController::$current_view = 'admin_registracia_zamestnanec';
        return view('admin_registracia_oddelenie');
    }

    public function showRegistrationFormIzba()
    {
        //todo porob podobne funkcie aj na ine
//        RegController::$current_view = 'admin_registracia_zamestnanec';
        return view('admin_registracia_izba');
    }

    public function showRegistrationFormLiek()
    {
        //todo porob podobne funkcie aj na ine
//        RegController::$current_view = 'admin_registracia_zamestnanec';
        return view('admin_registracia_liek');
    }

    public function showRegistrationForm()
    {
        //todo porob podobne funkcie aj na ine
        RegController::$current_view = 'auth.register';
        return view('auth.register');
    }

    protected function redirectTo()
    {
        //todo tuna cez if a $user = Auth::user(); zisti kto to zadava a tam ho vrat
        return '/home';
    }

    public function register(Request $request)
    {
        if($this->validator($request->all())->fails()){
            return view(RegController::$current_view, $request->all());//s datami naspat + co je zle
        }
        $this->create($request->all());
        return view('home');

    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //todo uprav na auth
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        //todo modifikuj
        return Validator::make($data, [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',

            'name' => 'required|string|max:30',
            'priezvisko' => 'required|string|max:30',
            'pozicia' => 'required|string|max:8',
            'rodne_cislo' => 'string|max:11',
            'mesto' => 'string|max:40',
            'psc' => 'string|max:5',
            'ulica_cislo_domu' => 'string|max:40',
            'stat' => 'string|max:40',
            'datum_narodenia' => 'date|date_format:Y-m-d',

            'uvazok' => 'required|string|max:10',
            'cislo_uctu' => 'string|max:25',
            'telefon' => 'string|max:13',

        ]);

    }
    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);

        $osoba_tmp = Osoba::create($user->id, $data);

        switch ( $data['pozicia']){
            case 'doktor':
                Doktor::create($osoba_tmp->id, $data);
                break;
            case 'sestra':
                Sestra::create($osoba_tmp->id, $data);
                break;
            case 'pacient':
                //todo tuna nema byt
                Pacient::create($osoba_tmp->id, $data);
                break;
            case 'prijemca':
                Prijemca::create($osoba_tmp->id, $data);
                break;
        }
    }
}
