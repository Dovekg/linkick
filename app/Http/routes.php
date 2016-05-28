<?php


Route::get('/', 'HomeController@index');


Route::auth();

Route::get('/home', 'HomeController@home');


Route::resource('connect', 'ConnectController');

// Route::get('/home/data', 'DataController@edit');
// Route::post('/connect', 'ConnectController@store');
// Route::get('/home/contact', 'ConnectController@index');

