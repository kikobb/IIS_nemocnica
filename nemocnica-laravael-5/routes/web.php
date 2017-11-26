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


//experiment
Route::get('/registerr', 'RegController@showRegistrationFormAdmin');

Route::post('/registerr', 'RegController@register');
//Route::post('/registerr', function(){
//    return view('login');
//});


//moje pridane

Route::get('/login1', function (){

    return view('login');
});

Route::get('/heslo', function (){

    return view('zabudnute_heslo');
});

Route::get('/admin_registracia_zamestnanec', function (){

    return view('admin_registracia_zamestnanec');
});

Route::get('/doktor_hladanie', function (){

    return view('doktor_vyhladavanie');
});


Route::get('/prijemca_najdene', function (){

    return view('prijemca_najdene');
});

Route::get('/home_pacient', function (){

    return view('home_pacient');
});

Route::get('/home_admin', function (){

    return view('home_admin');
});


Route::get('/prijemca_najdene', function (){

    return view('prijemca_najdene');
});

Route::get('/sestra_registracia_pacient', function (){

    return view('sestra_registracia_pacient');
});

Route::get('/doktor_upravit_profil', function (){

    return view('doktor_upravit_profil');
});

Route::get('/admin_uspesna_registracia_zamestnanca', function (){

    return view('admin_uspesna_registracia_zamestnanca');
});


Route::post('/', function (Request $data){

    return view('', $data);

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

