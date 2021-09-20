<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Show</title>
</head>
<body>
    <h1>論文詳細</h1>
    <p>タイトル:{{ $article->title }}</p>
    <p>{{ $article->body }}</p>
    <div class="button">
        <a href="/articles">一覧に戻る</a>
    </div>
    <div class="button">
        <a href="/articles/{{ $article->id }}/edit">編集する</a>
    </div>
    <input type="submit" value="削除する" form="form-del">
    <form action="/articles/{{ $article->id }}" method="post" id="form-del">
        @csrf
        @method('DELETE')
    </form>
</body>
</html>
