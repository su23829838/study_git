<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
</head>
<body>
    <h1>Laravel 初期ページ</h1>

    <h2>ユーザー一覧</h2>
    <ul>
        @foreach ($users as $user)
            <li>{{ $user->id }} - {{ $user->name }} - {{ $user->email }}</li>
        @endforeach
    </ul>
</body>
</html>
