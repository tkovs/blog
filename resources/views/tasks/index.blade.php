@extends('layouts.master')

@section('title')
Tasks
@endsection

@section('content')
<ul>
	@foreach ($tasks as $task)
	<li><a href="{{ route('show_task', $task->id) }}">{{ $task->body }}</a></li>
	@endforeach
</ul>
@endsection
