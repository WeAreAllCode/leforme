<?php

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

/* ORDERS INDEX + CR */
Route::resource('orders', 'OrderController');

/* ADMIN SECTION  ---  Managers + Admin Roles Only */
Route::prefix('admin')->group(function () {
	
	/* ADMIN INDEX */
	Route::view('/', 'admin.index');

	/* ITEMS INDEX + CRUD */
	Route::resource('items', 'ItemController');

	/* CATEOGORIES INDEX + CRUD */
	Route::resource('categories', 'CategoryController');

	/* COMPANIES INDEX + CRUD */
	Route::resource('companies', 'CompanyController');

	/* LOCATIONS INDEX + CRUD */
	Route::resource('locations', 'LocationController');

	/* SIZES INDEX + CRUD */
	Route::resource('sizes', 'SizeController');

	/* USERS INDEX + CRUD  ---  Admin Roles Only */
	Route::resource('users', 'UserController');

	/* USER ROLES INDEX + CRUD  ---  Admin Roles Only */
	Route::resource('user-roles', 'UserRoleController');

});

