<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <title>スコア一覧</title>
</head>
<body>
    <h1>スコア一覧</h1>
    <ul>
      @foreach ($scores as $score)
        <li>{{ $score->created_at }} : {{ $score->user_id }} : {{ $score->score }}</li>
      @endforeach
    </ul>
</body>
</html>
