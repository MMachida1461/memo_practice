<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Memo;

class MemoController extends Controller
{
    //メモ一覧画面へ遷移させる
    public function index() {
        $memos = Memo::all();
        var_dump($memos);
        return view('memo');
    }

    ///memo/createのパスで渡ってきたら、detail.blade.phpを作成
    public function getMemo() {
        Log::debug("web.appからメソッドが呼び出されていることを確認");
        return view('detail');
    }
}
