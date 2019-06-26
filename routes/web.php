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

Route::get('/distributor', 'DistributorController@index');
Route::post('/distributor/create', 'DistributorController@create');
Route::get('/distributor/show', 'DistributorController@show');
Route::get('/distributor/store', 'DistributorController@store');
Route::get('/distributor/{id}/edit', 'DistributorController@edit');
Route::get('/distributor/{id}/update', 'DistributorController@update');
Route::get('/distributor/{id}/hapus', 'DistributorController@destroy');