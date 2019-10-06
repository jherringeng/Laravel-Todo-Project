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

Route::get('about', 'AboutController@index');

Route::get('todos', 'TodosController@index');

Route::get('/todos/incomplete', 'TodosController@index_incomplete');

Route::get('/todos/complete', 'TodosController@index_complete');

Route::get('todos/{todo}', 'TodosController@show');

Route::get('new-todos', 'TodosController@create');

Route::get('edit-todos/{todo}', 'TodosController@edit');

Route::get('store-edited-todos/{todo}', 'TodosController@store_edit');

Route::post('store-todos', 'TodosController@store');

Route::get('delete-todos/{todo}', 'TodosController@delete');
