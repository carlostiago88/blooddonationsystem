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

Route::get('/', function () {
    return view('welcome');
});

Route::resource('doadores', 'DoadorController');

Route::get('/doador/login', [
    'as' => 'doador.login',
    'uses' => 'DoadorController@login'
]);

Route::get('/doador/novo', [
    'as' => 'doador.create',
    'uses' => 'DoadorController@create'
]);

Route::post('/doador/salvar', [
        'as' => 'doador.store',
        'uses' => 'DoadorController@store'
    ]
);