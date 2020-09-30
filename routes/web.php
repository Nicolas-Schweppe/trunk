<?php



Route::get('/welcome','ControladorVistas@index');

Route::get('/','ControladorVistas@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
