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
        <div class="task__add">
            <a href="{{ route('tasks.add') }}">＋タスクを追加する</a>
        </div>
        <table>
            <tr>
                <th>タスク</th>
                <th>アクション</th>
            </tr>
            @foreach ($tasks as $task)
            <tr>
                <td class="td1">{{ $task->name }}</td>
                <td class="td2">
                    <a href="{{ route('tasks.show', ['id' => $task->id]) }}">詳細</a>
                    <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">編集</a>
                    <form action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="POST" name="deleteForm">
                        @csrf
                        <button type="submit">削除</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
