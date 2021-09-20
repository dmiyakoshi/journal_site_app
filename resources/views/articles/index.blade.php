<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
</head>
<body>
    <h1>論文一覧</h1>
    @foreach ($articles as $art)
        <div class="title-art">
            <a href="/articles/{{ $art->id }}">{{ $art->title }}</a>
            <br><br>
        </div>
    @endforeach

    <div class="button">
        <a href="articles/create">新規論文投稿</a>
    </div>
</body>
</html>
