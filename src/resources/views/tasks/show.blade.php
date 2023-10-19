<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/tasks/show.css') }}">
    <title>タスク詳細</title>
</head>
<body>
    <h1>タスク詳細</h1>
<div class="container">
    <table>
        <tr>
            <th>ID</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>タスク</th>
            <td>{{ $task->name }}</td>
        </tr>
        <tr>
            <th>タスク内容</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>作成日時</th>
            <td>{{ $task->created_at->format('Y年m月d日 H:i') }}</td>
        </tr>
        <tr>
            <th>更新日時</th>
            <td>{{ $task->updated_at->format('Y年m月d日 H:i') }}</td>
        </tr>
    </table>
    <div class="link">
        <div class="link__back">
            <a href="/">戻る</a>
        </div>
        <div class="link__edit">
            <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">編集する</a>
        </div>
        <div class="link__delete">
            <form action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="POST" name="deleteForm">
                @csrf
                    <button type="submit">削除</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
