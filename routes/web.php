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
Route::resource('/productos', 'ProductosController');

/*Route::get('/inicio', 'ProductosController@index');
Route::get('/crear','ProductosController@create');
Route::get('/update','ProductosController@update');
Route::get('/delete','ProductosController@destroy');*/
    

