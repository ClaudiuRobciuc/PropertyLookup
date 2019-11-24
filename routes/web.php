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

Route::get('/listProperties', [
    'uses' => 'PropertyController@getAllProperties',
]);

Route::get('/listProperty/{id}', [
    'uses' => 'PropertyController@getProperty',
]);

Route::post('/addProperty', [
    'uses' => 'PropertyController@addProperty',
]);