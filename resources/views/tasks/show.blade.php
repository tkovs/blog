<!DOCTYPE html>

<html>
	<head>
		<title></title>
	</head>
	<body>
		<h1>{{ $task->body }} - {{ $task->completed }}</h1>
		<p>
			<a href="{{ route('finish_task', $task->id) }}">Concluir</a>
		</p>
	</body>
</html>