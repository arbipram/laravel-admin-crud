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

Route::prefix('admin')->group(function(){
	Route::get('login','Admin\LoginController@index');
	Route::post('login/validation','Admin\LoginController@validation');
	Route::get('logout','Admin\LoginController@logout');
});

Route::prefix('admin')->middleware(['Logged'])->middleware(['role_admin'])->group(function(){
	Route::get('dashboard','Admin\DashboardController@index');
	//role
	Route::get('role','Admin\RoleController@index');
	Route::get('role/create','Admin\RoleController@create');
	Route::get('role/edit/{id}','Admin\RoleController@edit');
	Route::post('role/store','Admin\RoleController@store');
	Route::post('role/update/{id}','Admin\RoleController@update');
	Route::get('role/delete/{id}','Admin\RoleController@delete');
	//users
	Route::get('user','Admin\UsersController@index');
	Route::get('user/create','Admin\UsersController@create');
	Route::get('user/edit/{id}','Admin\UsersController@edit');
	Route::post('user/store','Admin\UsersController@store');
	Route::post('user/update/{id}','Admin\UsersController@update');
	Route::get('user/delete/{id}','Admin\UsersController@delete');
});