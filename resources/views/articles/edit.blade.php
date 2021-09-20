<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>

<body>
    <h1>新規論文投稿</h1>
    <form action="/articles/{{ $article->id }}" method="POST">
    <p>論文タイトル
        <br>
        <input type="text" name="title" value="{{ old('title', $article->title) }}">
    </p>
    <p>本文
        <br>
        <textarea name="body">{{ old('body', $article->body) }}</textarea>
    </p>
        @csrf
        @method('PATCH')
        <input type="submit" value="更新">
    </form>
</body>
</html>
