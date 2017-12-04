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

Route::get('/', 'LoginController@index');
Route::post('/', 'LoginController@login')->name('loginValidate');
Route::get('/logout', 'LoginController@logout')->name('logout');

//admin
Route::resource('admin', 'AdminController');
Route::get('admin/{id}/confirm', 'AdminController@confirm');

//zamestnanec
Route::resource('zamestnanec', 'UserController');
Route::get('zamestnanec/{id}/confirm', 'UserController@confirm');

//pacient
Route::resource('pacient', 'PacientController');
Route::get('pacient/{id}/confirm', 'PacientController@confirm')->name('pac');
Route::get('pacient/{id}/vysetrenia', 'PacientController@vysetrenia')->name('pacient_vysetrenia');
Route::get('pacient/{id}/pobyty', 'PacientController@pobyty')->name('pacient_pobyty');
Route::get('pacient/{id}/lieky', 'PacientController@lieky')->name('pacient_lieky');


//pobyt
Route::resource('pobyt', 'PobytController');
Route::get('pobyt/{id}/confirm', 'PobytController@confirm');

//oddelenie
Route::resource('oddelenie', 'OddelenieController');
Route::get('oddelenie/{id}/confirm', 'OddelenieController@confirm');

//izba
Route::resource('izba', 'IzbaController');
Route::get('izba/{id}/confirm', 'IzbaController@confirm');

//vysetrenie
Route::resource('vysetrenie', 'VysetrenieController');
Route::get('vysetrenie/{id}/confirm', 'VysetrenieController@confirm');

//podanyLiek
Route::resource('podanyLiek', 'PodanyLiekController');
Route::get('podanyLiek/{id}/confirm', 'PodanyLiekController@confirm');

//liek
Route::resource('liek', 'LiekController');
Route::get('liek/{id}/confirm', 'LiekController@confirm');


//vyhladavanie
Route::resource('vyhladavanie', 'VyhladavanieController');



//nepouzivane

//admin
//Route::group(['middleware' => ['auth', 'admin']], function () {
//    Route::get('/zamestnanecReg', 'RegController@showZamestnanec')->name('zamestnanecReg');
//    Route::get('/oddelenieReg', 'RegController@showOddelenie')->name('oddelenieReg');
//    Route::get('/izbaReg', 'RegController@showIzba')->name('izbaReg');
//    Route::get('/liekReg', 'RegController@showLiek')->name('liekReg');
//
//    Route::post('/zamestnanecReg', 'RegController@regOsoba');
//    Route::post('/oddelenieReg', 'RegController@regOddelenie');
//    Route::post('/izbaReg', 'RegController@regIzba');
//    Route::post('/liekReg', 'RegController@regLiek');
//});
//
////doktor
//Route::group(['middleware' => ['auth','doktor']], function (){
////    Route::get();
//});
////doktor, sestra
//Route::group(['middleware' => ['auth','sestra']], function (){
//
//});
////doktor, sestra, prijemca
//Route::group(['middleware' => ['auth','prijemca']], function (){
//
//});
////pacient
//Route::group(['middleware' => ['auth','pacient']], function (){
//
//});
////vsetci prihlaseny
//Route::group(['middleware' => 'auth'], function (){
//    //todo over ze ked sa da hladat tak to ide cez tuto routu
//    Route::get('/vyhladavanie', 'SearchController@index')->name('vyhladavaj');
//
//    Route::post('/vyhladavanie', 'SearchController@find')->name('najdi');
//});

//Route::post('/registerr', function(){
//    return view('login');
//});
//Route::resource('user', 'UserController');


//moje pridane

//Route::get('/', function (){
//
//    return view('login');
//
//});


//Route::get('/login1', function (){
//
//    return view('login');
//});
//
//Route::get('/heslo', function (){
//
//    return view('zabudnute_heslo');
//});
//
//
//Route::get('/vyhladavanie', function (){
//
//    return view('vyhladavanie');
//});
//
//Route::get('/zmena_hesla', function (){
//
//    return view('zmena_hesla');
//});
//
//
//Route::get('/upravit_profil_admin', function (){
//
//    return view('upravit_profil_admin');
//});
//
//
//Route::get('/prijemca_najdene', function (){
//
//    return view('prijemca_najdene');
//});
//
//Route::get('/home_pacient', function (){
//
//    return view('home_pacient');
//});
//
//Route::get('/home_admin', function (){
//
//    return view('home_admin');
//});
//
//
//Route::get('/prijemca_najdene', function (){
//
//    return view('prijemca_najdene');
//});
//
//Route::get('/sestra_registracia_pacient', function (){
//
//    return view('sestra_registracia_pacient');
//});
//
//Route::get('/doktor_upravit_profil', function (){
//
//    return view('doktor_upravit_profil');
//});
//
//Route::get('/admin_uspesna_registracia_zamestnanca', function (){
//
//    return view('admin_uspesna_registracia_zamestnanca');
//});
//
//Route::get('/admin_uspesna_registracia_liek', function (){
//
//    return view('admin_uspesna_registracia_liek');
//});
//
//Route::get('/admin_uspesna_registracia_izba', function (){
//
//    return view('admin_uspesna_registracia_izba');
//});
//
//Route::get('/admin_uspesna_registracia_oddelenia', function (){
//
//    return view('admin_uspesna_registracia_oddelenia');
//});



Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

