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

Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/home','HomeController@update_avatar');

Route::get('/nature', 'CategoriesController@nature');

Route::get('/oser', 'CategoriesController@oser');

Route::get('/faune', 'CategoriesController@faune');

Route::get('/architecture', 'CategoriesController@architecture');

Route::get('/image', 'HomeController@indexe')->name("Images.index");

Route::get('image/create','HomeController@create'); 

Route::post('image/create','HomeController@store')->name("ajouter_image");

Route::get('image/{id}/edit','HomeController@edit')->name("editer_image");

Route::patch('image/{id}/update', 'HomeController@update')->name('update_image');

Route::delete('image/{id}', 'HomeController@destroy');

Route::get('image/{id}/download', 'HomeController@show')->name('download_image');

Route::get('/profil','UserController@profile')->name("profile");

Route::get('/profile','HomeController@update_avatar');

Route::get('/users', 'HomeController@users');