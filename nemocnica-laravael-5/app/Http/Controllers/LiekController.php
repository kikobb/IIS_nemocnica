<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Liek;
use Illuminate\Support\Facades\Auth;

class LiekController extends Controller
{
    function __construct()
    {
        //$this->middleware('auth');
        //$this->middleware('doktor')->except('show');
        //$this->middleware('sestricka')->only('create', 'show');
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
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        //vrata view s liekmi
        return view('liek.index')->with([
            'lieky' => Liek::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('liek.createEdit')->with(['osoba' => Auth::user()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate($this->rules());

        /* @var Liek $liek */
//        dd($request);
        $liek = Liek::create([
            'nazov' => $request['nazov'],
            'ucinna_latka' => $request['ucinna_latka'],
        ]);

        if ( $request->has('kontraindikacia') )
            $liek->kontraindikacia = $request['kontraindikacia'];

        $liek->save();

        return LiekController::confirm($liek->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        return view('liek.show')->with([
            "liek" => Liek::findOrFail($id),
        ]);
    }

    public function confirm($id)
    {
        return view('liek.confirm')->with([
            "liek" => Liek::findOrFail($id),
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
        return view('liek.createEdit')->with([
            'liek' => Liek::findOrFail($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate($this->rules());

        /* @var Liek $liek */
        $liek = Liek::findOrFail($id);
        $liek->nazov = $request['nazov'];
        $liek->ucinna_latka = $request['ucinna_latka'];

        if ( $request->has('kontraindikacia') )
            $liek->kontraindikacia = $request['kontraindikacia'];

        $liek->save();

        return redirect()->route('liek.show');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Liek::destroy($id);
        return back();
    }
}
