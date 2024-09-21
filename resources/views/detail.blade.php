<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="../css/reset.css"> --}}
    <link rel="stylesheet" href="/css/memo.css">
    <title>メモ詳細</title>
</head>
<body>
    {{-- <h1 class="h1">メモ追加</h1> --}}
    <p>{{$memos_detail->memo}}</p>
    <a href="/memo/detail/edit?id={{$memos_detail->id}}" class="edit_button">編集</a>
    <a href="/memo/detail/delete?id={{$memos_detail->id}}" class="delete_button">削除</a>
</body>
</html>