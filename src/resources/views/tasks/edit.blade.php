<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/tasks/edit.css') }}">
    <title>タスク編集</title>
</head>
<body>
    <h1>タスク編集</h1>
    <div class="error">
        @foreach ($errors->all() as $error)
        <p class="error__message">{{$error}}</p>
        @endforeach
    </div>
    <form action="{{ route('tasks.update', ['id' => $task->id]) }}" method="POST" class="form">
    @csrf
        <div class="form-group">
            <label for="name">タスク<span>(必須)</span></label><br>
            <input type="text" name="name" maxlength="30" placeholder="タスクは30文字で書きましょう。" value="{{ old('name', $task->name) }}">
        </div>
        <div class="form-group">
            <label for="content">タスク内容<span>(必須)</span></label><br>
            <textarea rows="5" name="content" placeholder="タスク内容を具体的に書きましょう">{{ old('content', $task->content) }}</textarea>
        </div>
        <button type="submit">更新する</button>
    </form>
</body>
</html>
