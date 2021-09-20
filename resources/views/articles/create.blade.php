<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>新規論文投稿</h1>
    <p>論文タイトル</p>
    <input type="text" name="name" value="{{ old('title') }}">
    <p>本文</p>
    <textarea name="body" >
        {{ old('body') }}
    </textarea>
    <div class="button">
        <input type="submit" value="投稿">
    </div>
</body>
</html>