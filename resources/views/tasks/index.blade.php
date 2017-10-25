<!DOCTYPE html>

<html>
	<head>
		<title>Tasks</title>
	</head>
	<body>
		<ul>
		@foreach ($tasks as $task)
		<li>
			<a href="{{ route('show_task', $task->id) }}">{{ $task->body }}</a>
		</li>
		@endforeach
		</ul>
	</body>
</html>