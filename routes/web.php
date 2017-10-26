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

use \App\Task;

Route::get('/tasks', 'TasksController@index')->name('list_tasks');
Route::get('/tasks/all', 'TasksController@all')->name('list_all_tasks');
Route::get('/tasks/{task}', 'TasksController@show')->name('show_task');
Route::get('/tasks/finish/{id}', 'TasksController@finish')->name('finish_task');
Route::get('/tasks/create/{body}', 'TasksController@create')->name('create_task');
