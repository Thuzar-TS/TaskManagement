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

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tasks', 'TaskController@index');
Route::get('/tasks/view/{id}', 'TaskController@view');

Route::get('/tasks/add', 'TaskController@add');
Route::post('/tasks/add', 'TaskController@create');

Route::get('/tasks/edit/{id}', 'TaskController@edit');
Route::post('/tasks/edit/{id}', 'TaskController@update');

Route::get('/tasks/delete/{id}', 'TaskController@delete');