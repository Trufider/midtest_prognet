<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/obat','ObatController@index');
Route::post('/obat/create','ObatController@create');
Route::get('/obat/{id}/edit','ObatController@edit');
Route::post('/obat/{id}/update','ObatController@update');
Route::get('/obat/{id}/delete','ObatController@delete');
Route::get('/obat/search','ObatController@search') -> name('obat.search');