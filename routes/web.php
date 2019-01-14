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

Route::get('/', 'HomeController@index')->name('Home');
Route::get('/about', 'HomeController@about')->name('About');
Route::get('/contact', 'HomeController@contact')->name('Contact');


Auth::routes();


Route::group(['prefix'=>'Alumno'],function(){
    Route::get('index','AlumnoController@index')->name('Alumno');
    Route::get('Listado/{id}','AlumnoController@ListadoAlumno')->name('ListadoAlumno');
    Route::get('ficha/{id}','AlumnoController@ficha')->name('fichaAlumno');
});
