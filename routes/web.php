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

Route::get('/tasks', function () {
	$tasks = Task::incomplete();

    return view('tasks.index', compact('tasks'));
})->name('list_tasks');

Route::get('/tasks/{task}', function ($id) {
	$task = Task::find($id);

	return view('tasks.show', compact('task'));
})->name('show_task');

Route::get('/tasks/create/{body}', function ($body) {
	$data = ['body' => $body];
	Task::insert($data);

	return redirect()->route('list_tasks');
})->name('create_task');

Route::get('/tasks/finish/{id}', function ($id) {
	$task = Task::find($id);
	$task->completed = true;
	$task->save();

	return redirect()->route('list_tasks');
})->name('finish_task');