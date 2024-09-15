<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\Memo;
use Illuminate\Support\Facades\DB;

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

    // メモ登録処理
    public function create(Request $request) {
        $param = [
            'memo' => $request->memo //formから渡ってきたname=memoの部分
        ];
        //insertを使用し、DBに登録
        DB::insert('insert into memos (memo, created_at, updated_at) values (:memo, NOW(), NOW())', $param);
        return to_route('memo');
    }
}
