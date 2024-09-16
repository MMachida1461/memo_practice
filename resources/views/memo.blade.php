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
    <h1>メモ一覧</h1>
    <ul>
    <ul>
        @foreach($memos as $memo)
            <li>
                @php
                    //文字数の上限
                    $limit = 10;
                @endphp
                @if (mb_strlen($memo->memo) > $limit)
                    @php
                        $title = mb_substr($memo->memo,0,$limit)
                    @endphp
                    <a href="/memo/detail?id={{$memo->id}}" value=>{{ $title.'...' }}</a>    
                @else
                    <a href="/memo/detail?id={{$memo->id}}" value=>{{ $memo->memo }}</a>    
                @endif
                
            </li>   
        @endforeach
    </ul>

    <a href="/memo/create" class="memo_create">メモを新規作成</a>
</body>
</html>