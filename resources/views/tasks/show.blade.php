@extends('layouts.master')

@section('title')
Task {{ $task->id }}
@endsection

@section('content')
<h1>{{ $task->body }} - {{ $task->completed }}</h1>
@if ($task->completed == false)
<p>
	<a href="{{ route('finish_task', $task->id) }}">Concluir</a>
</p>
@endif
@endsection