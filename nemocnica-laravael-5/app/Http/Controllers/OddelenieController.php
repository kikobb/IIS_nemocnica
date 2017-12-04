<?php

namespace App\Http\Controllers;

use App\Oddelenie;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OddelenieController extends Controller
{

    function __construct()
    {
        $this->middleware('auth');
        $this->middleware('admin')->except('index', 'show');
    }

    /**
     * @return array
     */
    private function rules()
    {
        return [
            'nazov' => 'required|max:50|unique:oddelenia,naozov',
            'poschodie' => 'integer|max:255'
        ];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('oddelenie.index')->with([
            'currUser' => Auth::user(),
            'oddelenia' => Oddelenie::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('oddelenie.createEdit')->with([
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
        /* @var Oddelenie $odd */
//        dd($request);
        $odd = Oddelenie::create([
            'nazov' => $request['nazov'],
            'poschodie' => $request['ucinna_latka'],
        ]);

        return $this->confirm($odd->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return View
     */
    public function show($id)
    {
        return view('oddelenie.show')->with([
            'currUser' => Auth::user(),
             'oddelenie' => Oddelenie::findOrFail($id),
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
        return view('oddelenie.confirm')->with([
            'currUser' => Auth::user(),
            "oddelenie" => Oddelenie::findOrFail($id),
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
        return view('oddelenie.createEdit')->with([
            'currUser' => Auth::user(),
            'oddelenie' => Oddelenie::findOrFail($id)
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

        /* @var Oddelenie $odd */
        $odd = Oddelenie::findOrFail($id);
        $odd->nazov = $request['nazov'];
        $odd->poschodie = $request['poschodie'];
        $odd->save();

        return $this->confirm($odd->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Oddelenie::destroy($id);
        return view('uspesne_vymazane')->with([
            'currUser' => Auth::user(),
        ]);
    }
}
