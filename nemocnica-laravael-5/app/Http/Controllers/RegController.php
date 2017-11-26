<?php

namespace App\Http\Controllers;

use App\Doktor;
use App\Izba;
use App\Liek;
use App\Oddelenie;
use App\Osoba;
use App\Pacient;
use App\Prijemca;
use App\Sestra;
use App\User;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


use Illuminate\Support\Facades\Validator;

class RegController extends Controller
{


    public function showZamestnanec()
    {
        return view('admin_registracia_zamestnanec');
    }

    public function showOddelenie()
    {
        return view('admin_registracia_oddelenie');
    }

    public function showIzba()
    {
        return view('admin_registracia_izba');
    }

    public function showLiek()
    {
        return view('admin_registracia_liek');
    }

//    public function show()
//    {
//        return view('register')->with([
//            'users' => User::all
//            (),
//            'arr' => [
//                'asd' => 'asfd'
//            ]
//        ]);
//    }

    protected function redirectTo()
    {
        //todo tuna cez if a $user = Auth::user(); zisti kto to zadava a tam ho vrat
        return '/login1';
    }

    public function regOsoba(Request $request)
    {
        //$request->validate($this->validator());

        $validator = Validator::make($request->all(), $this->rulesOsoby());
        if ($validator->fails()){
            $messages = $validator->messages();
            //$messages
            return view('admin_registracia_zamestnanec')->with(compact($request))->witherrors($validator);
        }

        $this->createOsoba($request->all());
        return view('admin_uspesna_registracia_zamestnanca');

    }

    public function regOddelenie(Request $request){
        $request->validate($this->rulesOddelenie());
        $this->createOddelenie($request->all());
    }

    public function regIzba(Request $request){
        $request->validate($this->rulesIzba());
        $this->createIzba($request->all());
    }

    public function regLiek(Request $request){
        $request->validate($this->rulesLiek());
        $this->createLiek($request->all());
    }

//    public function filtruj(Request $request) {
//        $request->current()->parameters();
//    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //todo uprav na auth
        //$this->middleware('auth');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return array
     */
    private function rulesOsoby()
    {
        return [
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',

            'name' => 'required|string|max:30',
            'priezvisko' => 'required|string|max:30',
            'pozicia' => 'required|string|max:8|exists:typy_uloh,nazov',
            'rodne_cislo' => 'string|max:11|nullable',
            'mesto' => 'string|max:40|nullable',
            'psc' => 'string|max:5|nullable',
            'ulica_cislo_domu' => 'string|max:40|nullable',
            'stat' => 'string|max:40|nullable',
            'datum_narodenia' => 'date|date_format:Y-m-d|nullable',
            'uvazok' => 'required|string|max:10',
            'cislo_uctu' => 'string|max:25|nullable',
            'telefon' => 'string|max:13|nullable',
        ];

    }

    private function rulesOddelenie(){
        return [
            'nazov' => 'required|string|max:60',
            'poschodie' => 'required|integer',
        ];
    }

    private function rulesIzba(){
        //typ, kapacita, cislo, oddelenie
        return [
            'typ' => 'required|string|max:20',
            'kapacita' => 'required|integer|max:255',
            'cislo' => 'integer|max:65000',
            'oddelenie' => 'required|string|max:8|exist:oddelenia,nazov',
        ];
    }

    private function rulesLiek(){
        return [
            'nazov' => 'required|string',
            'ucinna_latka' => 'required|string|max:50',
            'konraindikacia' => 'nullable|string|max:255',
        ];
    }


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    private function createOsoba(array $data)
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

    private function createOddelenie(array $data){
        Oddelenie::create($data);
    }

    private function createIzba(array $data){
        Izba::create($data);
    }

    private function createLiek(array $data){
        Liek::create($data);
    }
}
