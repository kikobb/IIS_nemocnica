<?php

namespace App\Http\Controllers;

use App\Izba;
use App\Pobyt;
use App\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PobytController extends Controller
{
    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('personal')->except('show');
        $this->middleware('parsonalPacient')->only('show');
    }

    private function rules()
    {
        return [
            'doktor_poradie' => 'required|integer',
            'rodne_cislo' => 'required|string|exists:users,rodne_cislo',
            'cislo_izby' => 'required|integer|exists:izby,cislo',
            'datum_prichodu' => 'required|date|date_format:Y-m-d',
            'datum_odchodu' => 'date|date_format:Y-m-d|nullable'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('pobyt.index')->with([
            'currUser' => Auth::user(),
            'pobyt' => Pobyt::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('pobyt.createEdit')->with([
            'currUser' => Auth::user(),
            'doktori' => User::getFullNamesOnPoziciaToArr('doktor'),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Contracts\View\View
     */
    public function store(Request $request)
    {
       $request->validate($this->rules());
        /* @var Pobyt $pobyt */
        $pobyt = new Pobyt();
        $pobyt->pacient_id = User::getUserByRodneCislo($request['rodne_cislo'])->id;
        $pobyt->prijemca_id = Auth::user()->id;
        $pobyt->izba_id = Izba::getIzbaByNumber($request['cislo_izby']);
        $pobyt->datum_prichodu = $request['datum_prichodu'];
        $pobyt->doktor_id = User::getAllUsersByPozicia('doktor')->get()[$request['doktor_poradie']]->id;
        $pobyt->save();
        return $this->confirm($pobyt->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return view('pobyt.show')->with([
            'currUser' => Auth::user(),
            'pobyt' => Pobyt::findOrFail($id),
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
        return view('pobyt.confirm')->with([
            'currUser' => Auth::user(),
            'pobyt' => Pobyt::findOrFail($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function edit($id)
    {
        return view('pobyt.createEdit')->with([
            'currUser' => Auth::user(),
            'pobyt' => Pobyt::findOrFail($id),
            'doktori' => User::getFullNamesOnPoziciaToArr('doktor'),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return View
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->rules());

        /* @var Pobyt $pobyt */
        $pobyt = Pobyt::findOrFail($id);
        $pobyt->doktor_id = $request['doktor_id'];
        $pobyt->pacient_id = User::getUserByRodneCislo($request['rodne_cislo'])->id;
        $pobyt->prijemca_id = Auth::user()->id;
        $pobyt->izba_id = Izba::getIzbaByNumber($request['cislo_izby']);
        $pobyt->datum_prichodu = $request['datum_prichodu'];
        if ($request->has('datum_odchodu')){
            $pobyt->datum_odchodu = $request['datum_odchodu'];
        }
        $pobyt->doktor_id = User::getAllUsersByPozicia('doktor')->get()[$request['doktor_poradie']]->id;
        $pobyt->save();

        return $this->confirm($pobyt->id);
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
