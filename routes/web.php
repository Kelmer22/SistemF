<?php

// Route::get('/', function () {
//     return view('index');
// });
Route::get('/', 'HomeController@index');

Route::get('/post', 'PostControlador@index');
Route::post('/post', 'PostControlador@store');
Route::delete('/{id}', 'PostControlador@destroy');
Route::get('/download/{id}', 'PostControlador@download');

Route::get('/cadastro','cadastro@index');
Auth::routes();

Route::get('/forncedor','CadastroFornecedorController@index');

Route::get('/', 'HomeController@index')->name('home');
Auth::routes();