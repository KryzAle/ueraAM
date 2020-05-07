<?php

use Illuminate\Support\Facades\Route;



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/formularioaspirante', 'InscripcionController@formAspirante')->name('formularioasp');
Route::get('/formularioacademico', 'InscripcionController@formAcademico')->name('formularioaca');
Route::get('/formulariopsicologico', 'InscripcionController@formPsicologico')->name('formulariopsi');
Route::get('/findelregistro', 'InscripcionController@registroend')->name('registroend');



