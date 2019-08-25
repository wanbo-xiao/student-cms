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

Route::get('student/home', ['as' => 'student_home', 'uses' => 'StudentController@home']);
Route::get('student/edit', ['as' => 'student_edit', 'uses' => 'StudentController@edit']);
Route::post('student/update', ['as' => 'student_update', 'uses' => 'StudentController@update']);
