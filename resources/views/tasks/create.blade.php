@extends('layouts.master')

@section('title')
Nova tarefa
@endsection

@section('content')
<h1>Crie uma nova tarefa</h1>
<hr><br />

{{-- {{ Form::open(['url' => route('create_task'), 'method' => 'POST']) }} --}}
{{ Form::open(['action' => 'TasksController@post_create', 'method' => 'POST']) }}
	<fieldset>
		<legend>Detalhes da tarefa</legend>

		<div>
			{{ Form::label('title', 'Título da tarefa') }}
			{{ Form::text('title') }}
		</div>

		<div>
			{{ Form::label('body', 'Descrição da tarefa') }}
			{{ Form::text('body') }}
		</div>

		<div>
			{{ Form::label('person_id', 'Responsável') }}
			{{ Form::select('person_id', App\Person::pluck('name', 'id')) }}
		</div>

		{{ Form::submit('Concluir') }}
	</fieldset>
{{ Form::close() }}

@include('layouts.errors')
@endsection