<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('home');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/peliculas', 'PeliculasController@index');
Route::get('/pelicula/{id}','PeliculasController@show');
Route::get('/peliculas/genero/{id}','PeliculasController@showGenero');
Route::post('/pelicula/{id}/comentar','comentarioController@store');
Route::post('/pelicula/{id}/alquilar','alquilarController@store');
Route::get('/user/alquileres','alquilarController@show');
Route::get('user/alquiler/{id}/actualizar/{indice}','alquilarController@update');
