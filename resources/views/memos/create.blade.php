<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="/css/memo.css">
    <title>メモ</title>
</head>
<body>
    <h1>メモ追加</h1>
    <form action="{{route('memos.create')}}" method="post" class="form-area">
        @csrf
        <textarea name="memo" cols="30" rows="10"></textarea>
        <input type="submit" value="作成" class="create_button">
    </form>
</body>
</html>