<?php

use Illuminate\Support\Facades\Route;



Auth::routes();
Route::get('/', 'HomeController@index')->name('homehome');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home/detalle/{id}', 'HomeController@detalle')->name('aspirantes.detalle');
Route::get('/home/editar/{id}', 'HomeController@editar')->name('aspirantes.editar');
Route::put('/home/editar/{id}', 'HomeController@update')->name('aspirantes.update');
Route::delete('/home/eliminar/{id}','HomeController@eliminar')->name('aspirantes.eliminar');



Route::get('/formularioaspirante', 'InscripcionController@formAspirante')->name('formularioasp');
Route::post('/formularioaspirante', 'InscripcionController@datosEstudiante')->name('aspirante.crear');

Route::get('/formularioacademico', 'InscripcionController@formAcademico')->name('formularioaca');
Route::post('/formularioacademico', 'InscripcionController@datosAcademicos')->name('academico.crear');

Route::get('/matricula', 'MatriculaController@verificarAprobacion')->name('matricula.verificar');
Route::post('/matricula', 'MatriculaController@comprobarAprobacion')->name('matricula.comprobar');



Route::get('/formulariopsicologico', 'InscripcionController@formPsicologico')->name('formulariopsi');

Route::get('/findelregistro', 'InscripcionController@registroend')->name('registroend');



