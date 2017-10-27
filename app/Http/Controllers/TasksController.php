<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
	public function index() {
		$tasks = Task::incomplete();

	    return view('tasks.index', compact('tasks'));
	} 

	public function get_create() {
		return view('tasks.create');
	}

	public function post_create() {
		$this->validate(request(), [
			'title' => 'required',
			'body'  => 'required'
		]);
		Task::create(request(['title', 'body']));

		return redirect()->route('list_tasks');
	}

	public function show(Task $task) {
		return view('tasks.show', compact('task'));
	}

	public function finish(Task $task) {
		$task->finish();

		return redirect()->route('list_tasks');
	}

	public function all() {
		$tasks = Task::all();

		return view('tasks.index', compact('tasks'));
	}
}
