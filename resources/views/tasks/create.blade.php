@extends('layouts.master')

@section('title')
Nova tarefa
@endsection

@section('content')
<h1>Crie uma nova tarefa</h1>
<hr><br />
<form id="newtask" action="{{ route('create_task') }}" method="POST">
	{{ csrf_field() }}
	<fieldset>
		<legend>Detalhes da tarefa</legend>

		<div>
			<label for="task-title">Título da tarefa</label>
			<input type="text" name="title" />
		</div>

		<div>
			<label for="task-body">Descrição da tarefa</label>
			<input type="text" name="body" />
		</div>

		<button type="submit" name="submit" />Publicar</button>
	</fieldset>	
</form>
@endsection