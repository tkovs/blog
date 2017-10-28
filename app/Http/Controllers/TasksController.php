<?php

namespace App\Http\Controllers;

use App\Task;
use App\Person;

class TasksController extends Controller
{
	public function index() {
		$tasks = Task::incomplete();
		$task = $tasks->first();

	    return view('tasks.index', compact('tasks', 'task'));
	} 

	public function get_create() {
		$people = Person::all();

		return view('tasks.create', compact('people'));
	}

	public function post_create() {
		$this->validate(request(), [
			'title' => 'required',
			'body'  => 'required',
			'person_id' => 'required'
		]);

		Task::create(request(['title', 'body', 'person_id']));

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
