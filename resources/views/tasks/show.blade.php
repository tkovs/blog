@extends('layouts.master')

@section('title')
Task {{ $task->id }}
@endsection

@section('content')
<h1>{{ $task->title }} - {{ $task->completed }}</h1>
<p>{{ $task->body }}</p>
<p>
@if ($task->completed == false)
	<a href="{{ route('finish_task', $task->id) }}">Concluir</a>
@else
	Concluído!
@endif
</p>
@endsection