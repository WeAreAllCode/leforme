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

/* HOME */
Route::get('/', function () { return view('leforme'); });

/* LAB INDEX + FORMS */
Route::get('lab', 'LabController@index');
Route::get('lab/flavors', 'LabController@flavors');
Route::get('lab/labels', 'LabController@labels');
Route::get('lab/supplies', 'LabController@supplies');

/* VAVA INDEX + FORMS */
Route::get('vava', 'VavaController@index');
Route::get('vava/juices', 'VavaController@juices');
Route::get('vava/products', 'VavaController@products');
Route::get('vava/supplies', 'VavaController@supplies');

/* PURPLE INDEX + FORMS */
Route::get('purple', 'PurpleController@index');
Route::get('purple/juices', 'PurpleController@juices');
Route::get('purple/products', 'PurpleController@products');
Route::get('purple/supplies', 'PurpleController@supplies');

/* ADMIN INDEX */
Route::get('admin', 'AdminController@index');

/* ITEMS INDEX + CRUD */
Route::get('admin/items', 'ItemController@index');
Route::get('admin/items/create', 'ItemController@create');
Route::post('admin/items', 'ItemController@store');
Route::get('admin/items/{item}', 'ItemController@show');
Route::get('admin/items/{item}/edit', 'ItemController@edit');
Route::patch('admin/items/{item}', 'ItemController@update');
Route::delete('admin/items/{item}', 'ItemController@destroy');

/* CATEGORIES INDEX + CRUD */
Route::get('admin/categories', 'CategoryController@index');
Route::get('admin/categories/create', 'CategoryController@create');
Route::post('admin/categories', 'CategoryController@store');
Route::get('admin/categories/{category}', 'CategoryController@show');
Route::get('admin/categories/{category}/edit', 'CategoryController@edit');
Route::patch('admin/categories/{category}', 'CategoryController@update');
Route::delete('admin/categories/{category}', 'CategoryController@destroy');

/* COMPANIES INDEX + CRUD */
Route::get('admin/companies', 'CompanyController@index');
Route::get('admin/companies/create', 'CompanyController@create');
Route::post('admin/companies', 'CompanyController@store');
Route::get('admin/companies/{company}', 'CompanyController@show');
Route::get('admin/companies/{company}/edit', 'CompanyController@edit');
Route::patch('admin/companies/{company}', 'CompanyController@update');
Route::delete('admin/companies/{company}', 'CompanyController@destroy');

/* LOCATIONS INDEX + CRUD */
Route::get('admin/locations', 'LocationController@index');
Route::get('admin/locations/create', 'LocationController@create');
Route::post('admin/locations', 'LocationController@store');
Route::get('admin/locations/{location}', 'LocationController@show');
Route::get('admin/locations/{location}/edit', 'LocationController@edit');
Route::patch('admin/locations/{location}', 'LocationController@update');
Route::delete('admin/locations/{location}', 'LocationController@destroy');

/* ORDERS INDEX + CRUD */
Route::get('admin/orders', 'OrderController@index');
Route::get('admin/orders/create', 'OrderController@create');
Route::post('admin/orders', 'OrderController@store');
Route::get('admin/orders/{order}', 'OrderController@show');
Route::get('admin/orders/{order}/edit', 'OrderController@edit');
Route::patch('admin/orders/{order}', 'OrderController@update');
Route::delete('admin/orders/{order}', 'OrderController@destroy');

/* SIZES INDEX + CRUD */
Route::get('admin/sizes', 'SizeController@index');
Route::get('admin/sizes/create', 'SizeController@create');
Route::post('admin/sizes', 'SizeController@store');
Route::get('admin/sizes/{size}', 'SizeController@show');
Route::get('admin/sizes/{size}/edit', 'SizeController@edit');
Route::patch('admin/sizes/{size}', 'SizeController@update');
Route::delete('admin/sizes/{size}', 'SizeController@destroy');

/* USERS INDEX + CRUD */
Route::get('admin/users', 'UserController@index');
Route::get('admin/users/create', 'UserController@create');
Route::post('admin/users', 'UserController@store');
Route::get('admin/users/{user}', 'UserController@show');
Route::get('admin/users/{user}/edit', 'UserController@edit');
Route::patch('admin/users/{user}', 'UserController@update');
Route::delete('admin/users/{user}', 'UserController@destroy');

/* USER ROLES INDEX + CRUD */
Route::get('admin/user-roles', 'UserRoleController@index');
Route::get('admin/user-roles/create', 'UserRoleController@create');
Route::post('admin/user-roles', 'UserRoleController@store');
Route::get('admin/user-roles/{user_role}', 'UserRoleController@show');
Route::get('admin/user-roles/{user_role}/edit', 'UserRoleController@edit');
Route::patch('admin/user-roles/{user_role}', 'UserRoleController@update');
Route::delete('admin/user-roles/{user_role}', 'UserRoleController@destroy');

