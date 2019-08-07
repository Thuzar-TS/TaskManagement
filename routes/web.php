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


Route::get('/tasklist','TasklistController@index')->name('tasklist.index');
Route::get('/tasklist/create','TasklistController@create')->name('tasklist.create');
Route::post('/tasklist/store','TasklistController@store')->name('tasklist.store');
Route::get('/tasklist/{id}','TasklistController@show')->name('tasklist.show');
Route::get('/tasklist/{id}/edit','TasklistController@edit')->name('tasklist.edit');
Route::put('/tasklist/{id}','TasklistController@update')->name('tasklist.update');
Route::delete('/tasklist/{id}','TasklistController@destroy')->name('tasklist.destroy');
