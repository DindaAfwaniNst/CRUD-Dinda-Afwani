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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/profile', function () {
    return view('profile');
});


Route::get('/pramuka','PramukaController@index');
Route::get('/pramuka/create','PramukaController@create');
Route::get('/pramuka/{pramuka}','PramukaController@show');
Route::post('/pramuka','PramukaController@store');
route::delete('/pramuka/{pramuka}','PramukaController@destroy');
route::get('/pramuka/{pramuka}/edit','PramukaController@edit');
route::patch('/pramuka/{pramuka}','PramukaController@update');
