<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="/css/memo.css">
    <title>ログイン</title>
</head>
<body>
    @if (session('error'))
    <p class="error_message">
      {{ session('error') }}
    </p>
  @endif
    <form action="{{route('login.showLogin')}}" method="post">
        @csrf
        <ul>
            <Li>メールアドレス</Li>
            <Li><input type="email" name="email"></Li>
        </ul>
        <ul>
            <Li>パスワード</Li>
            <Li><input type="password" name="password"></Li>
        </ul>
        <input type="submit" value="ログイン">
    </form>
    <a href="{{route('users.create')}}"><input type="submit" value="新規作成"></a>
</body>
</html>