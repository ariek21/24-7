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
Route::get('login', array('uses' => 'LoginController@index'));
Route::post('login', array('uses' => 'LoginController@doLogin'));
Route::get('logout', array('uses' => 'LoginController@doLogout'));

Route::get('dashboard', array(
	'uses' => 'DashboardController@index',
	'before' => 'auth', function()
	{
	    // Only authenticated users may enter...
	}));
Route::get('dashboard/tasks', array('uses'=>'TasksController@index'));
Route::get('dashboard/tasks/new', array('uses'=>'TasksController@create'));
Route::post('dashboard/tasks/new', array('uses' => 'TasksController@store'));

Route::get('dashboard/{all}', array(
	'uses' => 'DashboardController@index',
	'before' => 'auth', function()
	{
	    // Only authenticated users may enter...
	}));


