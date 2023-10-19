<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/tasks/add.css') }}">
    <title>タスク一覧</title>
</head>
<body>
    <h1>タスク追加</h1>
    <form action="{{ route('tasks.store') }}" method="POST" class="form">
    @csrf
        <div class="form-group">
            <label for="name">タスク<span>(必須)</span></label><br>
            <input type="text" name="name" maxlength="30" placeholder="タスクは30文字で書きましょう。">
        </div>
        <div class="form-group">
            <label for="content">タスク内容<span>(必須)</span></label><br>
            <textarea rows="5" name="content" placeholder="タスク内容を具体的に書きましょう"></textarea>
        </div>
        <button type="submit">追加する</button>
    </form>
</body>
</html>
