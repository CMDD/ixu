<?php


Route::get('/', function () {return view('login');});
Route::get('ixtus', function () {return view('admin.index');});

// Suscripciones
// Route::get('suscripciones','SuscripcionesController@index')->name('suscripcion.index');
Route::get('suscripcion/crear','SuscripcionesController@crear')->name('suscripcion.crear');
Route::get('suscripcion/index','SuscripcionesController@index')->name('suscripcion.index');

//Reportes
Route::get('reporte/suscripciones','ReporteController@exportSuscripciones');




Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('verificar','UserController@verificar');
Route::get('logout','UserController@logout');
