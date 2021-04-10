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

Auth::routes();

Route::get('posts','PostsController@index');
Route::post('make_post','PostsController@make_post');

Route::get("teams","TeamsController@index");

Route::get('/register', 'TeamsController@register')->name('register');
Route::post("register_team",'TeamsController@register_team');


Route::get('/home', 'HomeController@index')->name('home');
