<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css">
    <link rel="stylesheet" href="/css/memo.css">
    <title>メモ編集</title>
</head>
<body>
    <p>メモ編集</p>
    <div class="main">
        <form action="{{ route('memos.id.edit', ['id' => $memos_edit->id]) }}" method="post" class="form-area">
            @csrf
            <textarea name="memo" cols="30" rows="10">{{ old('memo', $memos_edit->memo) }}</textarea>
            <input type="hidden" name="memo_id" value="{{ $memos_edit->id }}">
            <input type="submit" value="更新" class="edit_button">
        </form>
        <form action="{{route('memos.id.delete', ['id' => $memos_edit->id]) }}" method="post" class="delete_button">
            @csrf
            <input type="submit" value="削除" class="">
        </form>
    </div>
</body>
</html>