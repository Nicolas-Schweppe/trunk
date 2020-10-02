<?php



Route::get('/welcome','ControladorVistas@index');

Route::get('/','ControladorVistas@login');

Auth::routes();


Route::post('/','ControladorUsuario@validacion')->name('login');


Route::get('/home', 'HomeController@index')->name('home');
