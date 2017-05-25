<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!


// Resource routes example
|	Route::GET('/pages', 'LeadController@Index');
|	Route::GET('/pages/create', 'LeadController@Create');
|	Route::POST('/pages', 'LeadController@Store');
|	Route::GET('/pages/{id}', 'LeadController@Show');
|	Route::GET('/pages/{id}/edit', 'LeadController@Edit');
|	Route::PUT('/pages/{id}', 'LeadController@Update');
|	Route::DELETE('/pages/{id}', 'LeadController@Destroy');
|
*/

Route::get('/', function () {
    return view('welcome');
});
 Route::GET('/home', 'HomeController@Index');
 Auth::routes();
 Route::resource('/users','UserController');


Route::get('/users/confirmation/{token}','Auth\RegisterController@confirmation')->name('confirmation');

//Route::GET('/users/edit/{id}', 'UserController@Edit');

//  GET|HEAD  | users                  | users.index      | App\Http\Controllers\UserController@index                              | web          |
// |        | POST      | users                  | users.store      | App\Http\Controllers\UserController@store                              | web          |
// |        | GET|HEAD  | users/create           | users.create     | App\Http\Controllers\UserController@create                             | web          |
// |        | GET|HEAD  | users/{user}           | users.show       | App\Http\Controllers\UserController@show                               | web          |
// |        | PUT|PATCH | users/{user}           | users.update     | App\Http\Controllers\UserController@update                             | web          |
// |        | DELETE    | users/{user}           | users.destroy    | App\Http\Controllers\UserController@destroy                            | web          |
// |        | GET|HEAD  | users/{user}/edit      | users.edit       | App\Http\Controllers\UserController@edit                               | web          |







// Route::any('/users/edit{id}', 'UserController@edit');

// // Route::any('/users/edit', 'UserController@Store');

// Route::get('/home', 'HomeController@index')->name('home');

// Route::GET('/users', 'UserController@Index');

// Route::GET('/users/create', 'UserController@Create');

// Route::POST('/users', 'UserController@Store');

// Route::DELETE('/users/{id}', 'UserController@Destroy');
