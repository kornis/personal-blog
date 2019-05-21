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

Route::get('/', [
	'as' => 'index',
	'uses' => 'FrontController@index'
]);

Route::get('front/article/{id}',[
	'uses' => 'ArticlesController@article',
	'as' => 'front.article'
]);

Route::get('front/article-by-category/{category}',[
	'uses' => 'ArticlesController@articlesCategory',
	'as' => 'front.articlesbycategories'
]);

//GRUPO DE RUTAS ADMINISTRADOR
Route::group(['prefix' => 'admin', 'middleware' => ['auth']], function(){

	//RUTAS QUE SOLO ACCEDE EL ADMINISTRADOR. INCLUYE ADMINISTRAR USUARIOS Y TODOS LOS DESTROY 
	Route::group(["middleware" => ['admin']], function(){

			Route::resource('users','UsersController',['only'=>['index','update','store','edit','destroy','create']]);

			Route::get('users/{id}/destroy',[
				'uses' => 'UsersController@destroy',
				'as' => 'admin.users.destroy'
			]);

			Route::get('categories/{id}/destroy',[
				'uses' => 'CategoriesController@destroy',
				'as' => 'admin.categories.destroy'
			]);

			Route::get('tags/{id}/destroy',[
				'uses' => 'TagsController@destroy',
				'as' => 'admin.tags.destroy'
			]);

			Route::get('articles/{id}/destroy',[
				'uses' => 'ArticlesController@destroy',
				'as' => 'admin.articles.destroy'
			]);
	});


		Route::resource('categories', 'CategoriesController',['only'=>['index','update','store','edit','destroy','create']]);

		Route::resource('tags', 'TagsController',['only'=>['index','update','store','edit','create']]);


		Route::resource('articles','ArticlesController',['only'=>['index','update','store','edit','destroy','create']]);


		Route::resource('images','ImagesController',['only'=>['index']]);

	});


		
		Route::post('auth/login',[
			'uses' => 'Auth\LoginController@authenticate',
			 'as' => 'auth.login']);

		Route::get('auth/logout',[
			'uses' => 'LogoutController@logout',
			'as' => 'auth.logout']);

		Route::get('/login',[
			'uses' => 'Auth\LoginController@loginview',
			'as' => '/login'
		]);





