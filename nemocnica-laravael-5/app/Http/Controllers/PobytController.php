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
        $this->middleware('personal');
    }

    private function rules()
    {
        return [
            'doktor_id' => 'required|integer|exists:users,id',
            'rodne_cislo' => 'required|string|exists:users,rodne_cislo',
            'cislo_izby' => 'required|integer|exists:izby,cislo',
            'datum_prichodu' => 'required|max:50',
            'datum_odchodu' => 'required|max:255'
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
            'doktori' => getFullNamesOnPoziciaToArr('doktor'),
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
        $pobyt = Pobyt::create([
            'doktor_id' => $request['doktor_id'],
            'pacient_id' => User::getUserByRodneCislo($request['rodne_cislo'])->id,
            'prijemca_id' => Auth::user()->id,
            'izba_id' => Izba::getIzbaByNumber($request['cislo_izby']),
            'datum_prichodu' => $request['datum_prichodu'],
        ]);
//        if ($request->has('datum_odchodu')){
//            $pobyt->datum_odchodu = $request['datum_odchodu'];
//        }
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
