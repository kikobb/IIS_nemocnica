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

Route::get('/tasks', function   (){
    //$tasks = DB::table('tasks')->get();
    $tasks = App\Task::all();


});

Route::get('/tasks/{task}', function ($id){

    $task = DB::table('tasks')->find($id);

    //$task = \Task::find($id);

    //$task = \App\Task::incomplete()->find($id);

    return view('tasks.show', compact('task'));
});

Route::post('/', function (Request $data){



    return view('', $data);

});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
