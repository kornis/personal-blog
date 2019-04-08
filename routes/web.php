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

Route::get('/', function() {
    return view('welcome');
})->name('/');


Route::group(['prefix' => 'admin'], function(){

	Route::resource('users','UsersController',['only'=>['index','update','store','edit','destroy','create']])->middleware('auth');
	Route::get('users/{id}/destroy',[
		'uses' => 'UsersController@destroy',
		'as' => 'admin.users.destroy'
	])->middleware('auth');

	Route::resource('categories', 'CategoriesController',['only'=>['index','update','store','edit','destroy','create']])->middleware('auth');

		Route::get('categories/{id}/destroy',[
			'uses' => 'CategoriesController@destroy',
			'as' => 'admin.categories.destroy'
		])->middleware('auth');

		Route::resource('tags', 'TagsController',['only'=>['index','update','store','edit','destroy','create']])->middleware('auth');

		Route::get('tags/{id}/destroy',[
			'uses' => 'TagsController@destroy',
			'as' => 'admin.tags.destroy'
		])->middleware('auth');
	});

		Route::post('auth/login',[
			'uses' => 'Auth\LoginController@authenticate',
			 'as' => 'auth.login']);

		Route::get('auth/logout',[
			'uses' => 'LogoutController@logout',
			'as' => 'auth.logout']);

		Route::get('/home',[
			'uses' => 'Auth\LoginController@loginview',
			'as' => '/home'
		]);

