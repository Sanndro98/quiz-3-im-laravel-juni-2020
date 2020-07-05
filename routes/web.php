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

Route::get('/artikel', 'ArtikelController@index'); // menampilkan halaman form
Route::get('/artikel/create', 'ArtikelController@create')->name('artikel.create');
Route::post('/artikel', 'ArtikelController@store');
Route::get('/artikel/{id}', 'ArtikelController@show'); 
Route::get('/artikel/{id}/edit', 'ArtikelController@edit'); 
Route::post('/artikel/{id}/update', 'ArtikelController@update'); 
Route::get('/artikel/{id}/delete', 'ArtikelController@delete'); 