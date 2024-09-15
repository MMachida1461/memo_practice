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
        // var_dump($memos);
        return view('memo')->with('memos',$memos);
    }

    ///memo/detailで各メモのidごとにメモの全文を表示するための処理
    public function getMemo() {
        //Getでメモのidを取得
        $memo_id = $_GET["id"];
        $memo_detail = Memo::find($memo_id);
        // Log::debug("web.appからメソッドが呼び出されていることを確認");
        return view('detail')->with('memos_detail',$memo_detail->memo);
    }

    //メモ登録画面への遷移
    public function create_view() {
        return view('create');
    }
}
