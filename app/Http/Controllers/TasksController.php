<?php

namespace App\Http\Controllers;

use App\Task;

class TasksController extends Controller
{
	public function index() {
		$tasks = Task::incomplete();

	    return view('tasks.index', compact('tasks'));
	} 

	public function finish($id) {
		$task = Task::find($id);
		$task->finish();

		return redirect()->route('list_tasks');
	}

	public function create($body) {
		Task::create($body);

		return redirect()->route('list_tasks');
	}

	public function show($id) {
		$task = Task::find($id);

		return view('tasks.show', compact('task'));
	}

	public function all() {
		$tasks = Task::all();

		return view('tasks.index', compact('tasks'));
	}
}
