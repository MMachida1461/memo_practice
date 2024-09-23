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
    <h1>メモ一覧</h1>
    <ul>
    <ul>
        @foreach($memos as $memo)
            <li>
                <a href="{{ route('memos.id.edit_view', ['id' => $memo->id]) }}" >{{ $memo->display_title }}</a> 
            </li>   
        @endforeach
    </ul>

    <a href="{{ route('memos.create_view') }}" class="memo_create">メモを新規作成</a>
</body>
</html>