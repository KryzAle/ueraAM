<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/formularioaspirante', 'InscripcionController@formAspirante')->name('formularioasp');
Route::post('/formularioaspirante', 'InscripcionController@datosEstudiante')->name('aspirante.crear');

Route::get('/formularioacademico', 'InscripcionController@formAcademico')->name('formularioaca');
Route::post('/formularioacademico', 'InscripcionController@datosAcademicos')->name('academico.crear');

Route::get('/matricula', 'MatriculaController@verificarAprobacion')->name('matricula.verificar');
Route::post('/matricula', 'MatriculaController@comprobarAprobacion')->name('matricula.comprobar');



Route::get('/formulariopsicologico', 'InscripcionController@formPsicologico')->name('formulariopsi');

Route::get('/findelregistro', 'InscripcionController@registroend')->name('registroend');



