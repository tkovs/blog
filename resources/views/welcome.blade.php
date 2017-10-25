<!DOCTYPE html>
<html>
<head>
    <title>Testando</title>
</head>
<body>
    <ul>
    @foreach ($tasks as $task)
        <li>{{ $task->body }}</li>
    @endforeach
    </ul>
</body>
</html>