<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use \Illuminate\Http\Request;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function (){
    //$tasks = DB::table('tasks')->get();
    $tasks = App\Task::all();


});

Route::get('/tasks/{task}', function ($id){

    $task = DB::table('tasks')->find($id);

    //$task = \Task::find($id);

    //$task = \App\Task::incomplete()->find($id);

    return view('tasks.show', compact('task'));
});

Route::get('/register', function (){

    return view('register');
});

//moje pridane

Route::get('/login1', function (){

    return view('login');
});

Route::get('/heslo', function (){

    return view('zabudnute_heslo');
});

Route::get('/adm_reg_zamestnanec', function (){

    return view('admin_registracia_zamestnanec');
});

Route::get('/dok_hladanie', function (){

    return view('doktor_vyhladavanie');
});


Route::get('/pri_najdene', function (){

    return view('prijemca_najdene');
});

Route::get('/pac_home', function (){

    return view('pacient_home');
});

Route::get('/pri_najdene', function (){

    return view('prijemca_najdene');
});

Route::get('/ses_reg_pac', function (){

    return view('sestra_registracia_pacient');
});

Route::get('/dok_upravit_profil', function (){

    return view('doktor_upravit_profil');
});


Route::post('/', function (Request $data){

    return view('', $data);

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

