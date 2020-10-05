<?php



Route::get('/welcome','ControladorVistas@index')->name('welcome');

Route::get('/','ControladorVistas@login');

Auth::routes();

Route::get('/inicio','ControladorVistas@inicio')->name('inicio');

Route::post('/','ControladorUsuario@validacion')->name('login');

Route::get('/categorias','ControladorVistas@categorias')->name('categorias');

Route::get('/home', 'HomeController@index')->name('home');
