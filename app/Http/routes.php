<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
| post, get, put, delete.
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('plan','PlanController');
Route::resource('caracteristica','CaracteristicaController');
Route::resource('lineamiento','LineamientoController');
Route::resource('usuario','UsuarioController');
Route::resource('proceso','ProcesoController');
Route::resource('facultad','FacultadController');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
