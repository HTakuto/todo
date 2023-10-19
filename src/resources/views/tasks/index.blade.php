<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/tasks/task.css') }}">
    <title>タスク一覧</title>
</head>
<body>
    <h1>タスク一覧画面</h1>
    <div class="container">
        <table>
            <tr>
                <th>タスク</th>
                <th>アクション</th>
            </tr>
            @foreach ($tasks as $task)
            <tr>
                <td>{{ $task->name }}</td>
                <td>
                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}">詳細</a>
                    <a href="">編集</a>
                    <a href="">削除</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
