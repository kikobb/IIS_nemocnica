<?php

namespace App\Http\Controllers;

use App\Oddelenie;
use App\User;
use App\Vysetrenie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class VysetrenieController extends Controller
{

    function __construct()
    {
//        $this->middleware('auth');
//        $this->middleware('doktor')->except('create', 'show', 'index');
//        $this->middleware('sestricka')->only('create', 'show')->except('index');
    }

    /**
     * @return array
     */
    private function rules()
    {
        return [
            'nazov' => 'required|max:50',
            'ucinna_latka' => 'required|max:255'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index()
    {
        return view('vysetrenie.index')->with([
            'currUser' => Auth::user(),
            //TODO zle, sprav aby sa nevracali vsetky ale len od prhlaseneho
            //TODO doktora a to len poslednych x, sprav to aj ostatnych kontrolleroch
            'vysetrenia' => Vysetrenie::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create()
    {
        return view('vysetrenia.create')->with([
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

        /* @var Vysetrenie $vis */
        $vys = Vysetrenie::create([
            'doktor_id' => \Auth::user()->id,
            'oddelenie_id' => Oddelenie::getIdFromName($request['oddelenie']),
            'pacient_id' => User::getUserByRodneCislo($request['rodne_cislo']),
        ]);
        if ($request->has('typ')){
            $vys->typ = $request['typ'];
        }
        if ($request->has('sprava')){
            $vys->sprava = $request['sprava'];
        }
        $vys->save();

        return $this->confirm($this->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return view('vysetrenie.show')->with([
            'currUser' => Auth::user(),
            'vysetrenie' => Vysetrenie::findOrFail($id),
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
        return view('vysetrenie.confirm')->with([
            'currUser' => Auth::user(),
            'vysetrenie' => Vysetrenie::findOrFail($id),
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
        return view('vysetrenie.createEdit')->with([
            'currUser' => Auth::user(),
            'vysetrenie' => Vysetrenie::findOrFail($id),
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

        /* @var Vysetrenie $vis */
        $vys = Vysetrenie::findOrFail($id);
//        $vys->doktor_id => \Auth::user()->id,
        $vys->oddelenie_id = Oddelenie::getIdFromName($request['oddelenie']);
        $vys->pacient_id = User::getUserByRodneCislo($request['rodne_cislo']);
        if ($request->has('typ')){
            $vys->typ = $request['typ'];
        }
        if ($request->has('sprava')){
            $vys->sprava = $request['sprava'];
        }
        $vys->save();

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
        Vysetrenie::destroy($id);
        return back();
    }
}
