@extends('layouts.master')

@section('title')
Tasks
@endsection

@section('content')
<ul>
	@isset ($tasks)
	@foreach ($tasks as $t)
	<li>
		<a href="{{ route('show_task', $t->id) }}">
			{{ $t->title }}
		</a>

		{{ $t->created_at->toFormattedDateString() }}</li>
	@endforeach
	@endisset
</ul>

<div>
	<h2>Tarefa não concluída mais antiga</h2>

	@include('tasks.task')
</div>
@endsection
