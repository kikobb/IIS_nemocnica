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
//Route::group(['middleware' => ['auth', 'admin']], function () {
    Route::get('/zamestnanecReg', 'RegController@showZamestnanec')->name('zamestnanecReg');

    Route::get('/oddelenieReg', 'RegController@showOddelenie')->name('oddelenieReg');

    Route::get('/izbaReg', 'RegController@showIzba')->name('izbaReg');

    Route::get('/liekReg', 'RegController@showLiek')->name('liekReg');
//});

Route::post('/zamestnanecReg', 'RegController@regOsoba');
Route::post('/oddelenieReg', 'RegController@regOddelenie');
Route::post('/izbaReg', 'RegController@regIzba');
Route::post('/liekReg', 'RegController@regLiek');

//Route::post('/registerr', function(){
//    return view('login');
//});
//Route::resource('user', 'UserController');


//moje pridane

Route::get('/', function (){

    return view('login');

});


Route::get('/login1', function (){

    return view('login');
});

Route::get('/heslo', function (){

    return view('zabudnute_heslo');
});


Route::get('/doktor_hladanie', function (){

    return view('vyhladavanie');
});


Route::get('/vyhladavanie_admin', function (){

    return view('vyhladavanie_admin');
});

Route::get('/zmena_hesla', function (){

    return view('zmena_hesla');
});


Route::get('/upravit_profil_admin', function (){

    return view('upravit_profil_admin');
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

Route::get('/admin_uspesna_registracia_liek', function (){

    return view('admin_uspesna_registracia_liek');
});

Route::get('/admin_uspesna_registracia_izba', function (){

    return view('admin_uspesna_registracia_izba');
});

Route::get('/admin_uspesna_registracia_oddelenie', function (){

    return view('admin_uspesna_registracia_oddelenie');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

