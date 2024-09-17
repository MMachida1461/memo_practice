<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/memo.css">
    <title>ユーザー登録</title>
</head>
<body>
    <form action="{{route('createUser')}}" method="post">
        @csrf
        <ul>
            <Li>名前</Li>
            <Li><input type="text" name="name"></Li>
        </ul>
        <ul>
            <Li>メールアドレス</Li>
            <Li><input type="email" name="email"></Li>
        </ul>
        <ul>
            <Li>パスワード</Li>
            <Li><input type="password" name="password"></Li>
        </ul>

        <ul>
            <Li>パスワード確認</Li>
            <Li><input type="password" name="confirm_password"></Li>
        </ul>
        <input type="submit" value="登録">
    </form>
</body>
</html>