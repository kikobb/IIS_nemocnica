<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use \App\Oddelenie;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('doktor')->except('create', 'show', 'index');
//        $this->middleware('sestricka')->only('create', 'show')->except('index');
    }

    private function uniqueRules(){
        return [
            'email' => 'unique:users',
            'rodne_cislo' => 'unique:users'
        ];
    }

    private function rules()
    {
        return [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
            'meno' => 'required|string|max:30',
            'priezvisko' => 'required|string|max:30',
            'pozicia' => 'required|string|max:8',

            'uvazok' => 'string|max:10',
            'rodne_cislo' => 'string|max:11|nullable',
            'mesto' => 'string|max:40|nullable',
            'psc' => 'string|max:5|nullable',
            'ulica_cislo' => 'string|max:40|nullable',
            'stat' => 'string|max:40|nullable',
            'datum_narodenia' => 'date|date_format:Y-m-d|nullable',
            'cislo_uctu' => 'string|max:25|nullable',
            'telefon' => 'string|max:13|nullable',
        ];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        switch (Auth::user()->pozicia){
            case 'admin':
                return redirect()->action('AdminController@index');
                break;
            case 'doktor':
            case 'sestra':
            case 'prijemca':
                return view('zamestnanec.index')->with(['currUser' => Auth::user()]);
                break;
            case 'pacient':
                return redirect()->action('PacientController@index');
            break;
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('zamestnanec.createEdit')->with([
            'currUser' => Auth::user(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return View
     */
    public function store(Request $request)
    {

        $request->validate($this->rules());
        $request->validate($this->uniqueRules());
        $user = new User();
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->pozicia = $request['pozicia'];
        $user->meno = $request['meno'];
        $user->priezvisko = $request['priezvisko'];
//        $user = User::create([
//            'email' => $request['email'],
//            'password' => bcrypt($request['password']),
//            'pozicia' => $request['pozicia'],
//            'meno' => $request['meno'],
//            'priezvisko' => $request['priezvisko'],
//        ]);
        if ( $request->has('rodne_cislo') )
            $user->rodne_cislo = $request['rodne_cislo'];
        if ( $request->has('mesto') )
            $user->mesto = $request['mesto'];
        if ( $request->has('psc') )
            $user->psc = $request['psc'];
        if ( $request->has('ulica_cislo') )
            $user->ulica_cislo = $request['ulica_cislo'];
        if ( $request->has('stat') )
            $user->stat = $request['stat'];
        if ( $request->has('datum_narodenia') )
            $user->datum_narodenia = $request['datum_narodenia'];
        if ( $request->has('uvazok') )
            $user->uvazok = $request['uvazok'];
        if ( $request->has('cislo_uctu') )
            $user->cislo_uctu = $request['cislo_uctu'];
        if ( $request->has('telefon') )
            $user->telefon = $request['telefon'];
        if ( $request->has('oddelenie') ) {
            $oddelenie = Oddelenie::where('nazov', $request['oddelenie'])->first();
            if ($user->typ_ulohy === 'doktor'){
                $user->oddelenie_doktor_id = $oddelenie->id;
            }elseif ($user->typ_ulohy === 'sestra'){
                $user->oddelenie_sestra_id = $oddelenie->id;
            }
        }
        $user->save();

        return $this->confirm($user->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        return view('zamestnanec.show')->with([
            'currUser' => Auth::user(),
            'osoba' => User::findOrFail($id),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function confirm($id)
    {
        return view('zamestnanec.confirm')->with([
            'currUser' => Auth::user(),
            "osoba" => User::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function edit($id)
    {
        return view('zamestnanec.createEdit')->with([
            'currUser' => Auth::user(),
            'osoba' => User::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->rules());
        /* @var User $user */
        $user = User::findOrFail($id);
        //povinne
        $user->email = $request['email'];
        $user->password = bcrypt($request['password']);
        $user->pozicia = $request['pozicia'];
        $user->meno = $request['meno'];
        $user->priezvisko = $request['priezvisko'];
        //nepovinne
        if ( $request->has('rodne_cislo') )
            $user->rodne_cislo = $request['rodne_cislo'];
        if ( $request->has('mesto') )
            $user->mesto = $request['mesto'];
        if ( $request->has('psc') )
            $user->psc = $request['psc'];
        if ( $request->has('ulica_cislo') )
            $user->ulica_cislo = $request['ulica_cislo'];
        if ( $request->has('stat') )
            $user->stat = $request['stat'];
        if ( $request->has('datum_narodenia') )
            $user->datum_narodenia = $request['datum_narodenia'];
        if ( $request->has('uvazok') )
            $user->uvazok = $request['uvazok'];
        if ( $request->has('cislo_uctu') )
            $user->cislo_uctu = $request['cislo_uctu'];
        if ( $request->has('telefon') )
            $user->telefon = $request['telefon'];
        if ( $request->has('oddelenie') ) {
            $oddelenie = Oddelenie::where('nazov', $request['oddelenie'])->first();
            if ($user->typ_ulohy === 'doktor'){
                $user->oddelenie_doktor_id = $oddelenie->id;
            }elseif ($user->typ_ulohy === 'sestra'){
                $user->oddelenie_sestra_id = $oddelenie->id;
            }
        }
        if ( $request->has('cislo_poistovne') )
            $user->cislo_poistovne = $request['cislo_poistovne'];
        $user->save();
        return $this->confirm($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        User::destroy($id);
        return back();
    }
}
