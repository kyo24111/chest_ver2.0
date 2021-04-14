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

Route::get('/teams_register', 'TeamsController@teams_register')->name('teams_register');
Route::post("teams_register_act",'TeamsController@teams_register_act');


Route::get('/home', 'HomeController@index')->name('home');
