<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Todo List</title>
</head>
<body>
    <h1>Todoリスト</h1>
    <ul>
        @foreach ($todos as $todo)
            <li>
                @if ($todo['completed'])
                    <strike>{{ $todo['task'] }}</strike>
                @else
                    {{ $todo['task'] }}
                @endif
            </li>
        @endforeach
    </ul>
</body>
</html>
