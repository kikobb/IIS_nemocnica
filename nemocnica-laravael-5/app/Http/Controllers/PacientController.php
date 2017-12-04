<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class PacientController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('personal')->except('index', 'show', 'vysetrenia', 'pobyty', 'lieky');
        $this->middleware('personalPacient')->only('index', 'show', 'vysetrenia', 'pobyty', 'lieky');
        //todo dorob spraven povolena na prid funkcie
    }

    private function uniqueRules(){
        return [
            'email' => 'unique:users',
            'rodne_cislo' => 'unique:users',
            'password' => 'required|string|min:6',
        ];
    }

    private function rules()
    {
        return [
            'email' => 'required|string|email|max:255',
            'meno' => 'required|string|max:30',
            'password' => 'string|min:6',
            'priezvisko' => 'required|string|max:30',
            'rodne_cislo' => 'required|string|max:11',

            'mesto' => 'string|max:40|nullable',
            'psc' => 'string|max:5|nullable',
            'ulica_cislo_domu' => 'string|max:40|nullable',
            'stat' => 'string|max:40|nullable',
            'datum_narodenia' => 'date|date_format:Y-m-d|nullable',
            'cislo_poistovne' => 'string|max:10|nullable',
        ];

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pacient.index')->with([
            'currUser' => Auth::user(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pacient.createEdit')->with([
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

        $user = User::create([
            'email' => $request['email'],
            'password' => bcrypt($request['password']),
            'pozicia' => 'pacient',
            'meno' => $request['meno'],
            'priezvisko' => $request['priezvisko'],
        ]);
        //TODO to co je zkomentovane je nehrada za konstruktor
//        $user->email = $request['email'];
//        $user->password = bcrypt($request['password']);
//        $user->pozicia = $request['pozicia'];
//        $user->meno = $request['meno'];
//        $user->priezvisko = $request['priezvisko'];
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
        if ( $request->has('cislo_poistovne') )
            $user->cislo_poistovne = $request['cislo_poistovne'];
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
        return view('pacient.show')->with([
            'currUser' => Auth::user(),
            "osoba" => User::findOrFail($id),
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
        return view('pacient.confirm')->with([
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
    public function vysetrenia($id)
    {
        return view('pacient.zobraz_vysetrenia')->with([
            'currUser' => Auth::user(),
            'vysetrenia' => User::findOrFail($id)->getVysetrenia(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function pobyty($id)
    {
        return view('pacient.zobraz_pobyty')->with([
            'currUser' => Auth::user(),
            'pobyty' => User::findOrFail($id)->getPobyty(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function lieky($id)
    {
        return view('pacient.zobraz_lieky')->with([
            'currUser' => Auth::user(),
            'podane_lieky' => User::findOrFail($id)->getPacientVsetkyPodaneLieky(),
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
        return view('pacient.createEdit')->with([
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
        $user->pozicia = $request['pozicia'];
        $user->meno = $request['meno'];
        $user->priezvisko = $request['priezvisko'];
        //nepovinne
        if ($request->has('passsword'))
            $user->password = bcrypt($request['password']);
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
