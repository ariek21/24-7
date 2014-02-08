<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('/', function()
{
	//return Redirect::to('/login');
});
Route::get('login',
	array('uses' => 'LoginController@index'));

Route::post('login',
	array('uses' => 'LoginController@doLogin'));

Route::get('logout',
	array('uses' => 'LoginController@doLogout'));

Route::get('dashboard', array(
	'uses' => 'DashboardController@index',
	'before' => 'auth', function()
	{
	    // Only authenticated users may enter...
	}));

// Tasks

Route::get('dashboard/tasks', array('uses'=>'TasksController@index'));

Route::get('dashboard/tasks/new', array('uses'=>'TasksController@create'));

Route::post('dashboard/tasks/new', array('uses' => 'TasksController@store'));

// Clients

Route::get('dashboard/clients', array('uses' => 'ClientsController@index'));

Route::get('dashboard/client/show/{id}', array('uses' => 'ClientsController@show'));

Route::get('dashboard/client/delete/{id}', array('uses' => 'ClientsController@destroy'));

Route::get('dashboard/client/edit/{id}', array('uses' => 'ClientsController@edit'));

Route::get('dashboard/client/new', array('uses' => 'ClientsController@create'));

Route::get('dashboard/clients/{orderBy}/{order?}', array('uses' => 'ClientsController@index'));

Route::get('dashboard/client/contact/delete/{id}/{client_id}', array('uses' => 'ClientsController@deleteContact'));

Route::get('dashboard/client/contact/edit/{id}/{client_id}', array('uses' => 'ClientsController@editContact'));

Route::get('dashboard/client/update', array('uses' => 'ClientsController@update'));

// POST

Route::post('dashboard/client/update', array('uses' => 'ClientsController@update'));

Route::post('dashboard/clients/new', array('uses' => 'ClientsController@store'));

Route::post('dashboard/client/contact/new', array('uses' => 'ClientsController@addContact'));

// Other

Route::get('dashboard/{all}',
	array(
	'uses' => 'DashboardController@index',
	'before' => 'auth', function()
	{
	    // Only authenticated users may enter...
	}));

