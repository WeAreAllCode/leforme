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
    return view('leforme');
});

Route::get('lab.index', 'LabController@index')
Route::post('lab.flavors', 'LabController@flavors');
Route::post('lab.labels', 'LabController@labels');
Route::post('lab.supplies', 'LabController@supplies');

Route::get('vava.index', 'VavaController@index')
Route::post('vava.juices', 'VavaController@juices');
Route::post('vava.products', 'VavaController@products');
Route::post('vava.supplies', 'VavaController@supplies');

Route::get('purple.index', 'PurpleController@index')
Route::post('purple.juices', 'PurpleController@juices');
Route::post('purple.products', 'PurpleController@products');
Route::post('purple.supplies', 'PurpleController@supplies');

Route::resource('items', 'ItemController');
