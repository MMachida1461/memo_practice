<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="../css/reset.css"> --}}
    <link rel="stylesheet" href="/css/memo.css">
    <title>メモ</title>
</head>
<body>
    {{-- ダミーのメモ一覧 start --}}
    <h1 class="h1">メモ一覧</h1>
    <ul>
    <ul>
        @foreach($memos as $memo)
            <li>
                <a href="#">{{$memo->memo}}</a>
            </li>   
        @endforeach
    </ul>
    {{-- ダミーのメモ一覧 end --}}
</body>
</html>