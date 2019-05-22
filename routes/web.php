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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/toko', 'TokoController@index');
Route::post('/toko/create', 'TokoController@create');
Route::get('/toko/jual', 'TokoController@jual');
Route::get('/toko/jual2', 'TokoController@jual2');
Route::get('/toko/show', 'TokoController@show');
Route::get('/toko/edit/{id}','TokoController@edit');
Route::post('/toko/update/{id}','TokoController@update');
Route::get('/toko/delete/{id}','TokoController@destroy');
