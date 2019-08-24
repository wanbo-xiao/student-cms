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

Route::get('/', 'HomeController@index');

Route::get('login', ['middleware' => 'guest', 'as' => 'login', 'uses' => 'LoginController@loginGet']);
Route::post('login', ['middleware' => 'guest', 'uses' => 'LoginController@loginPost']);
Route::get('logout', ['middleware' => 'auth', 'as' => 'logout', 'uses' => 'LoginController@logout']);

Route::get('stu/home', ['as' => 'stu_home', 'uses' => 'Stu\StudentController@home']);
Route::get('stu/edit', ['as' => 'stu_edit', 'uses' => 'Stu\StudentController@edit']);
Route::post('stu/update', ['as' => 'stu_update', 'uses' => 'Stu\StudentController@update']);
