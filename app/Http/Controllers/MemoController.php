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
        // 1ページあたり10件取るように修正
        $memos = Memo::paginate(10);
        // var_dump($memos);
        return view('memo')->with('memos',$memos);
    }

    ///memo/detailで各メモのidごとにメモの全文を表示するための処理
    public function getMemo(Request $request) {
        // 意図しない値が入れられないように修正
        $request->validate([
            'id' => 'required|integer',
        ]);

        //queryメソッドを使用し、Requestのidを取得
        $memo_id = $request->query('id');
        $memo_detail = Memo::findOrFail($memo_id);
        
        //idのデータがDB上にない時、メモ一覧へ遷移させる
        if(!$memo_detail){
            return redirect()->route('memo')->with('error','Memo not found');
        }
        return view('detail')->with('memos_detail',$memo_detail);
    }

    //メモ編集画面への遷移
    public function edit_view(Request $request) {
        // 意図しない値が入れられないように修正
        $request->validate([
            'id' => 'required|integer',
        ]);

        //queryメソッドを使用し、Requestのidを取得
        $memo_id = $request->query('id');
        $memo_edit = Memo::findOrFail($memo_id);
        
        if(!$memo_edit){
            return redirect()->route('memo')->with('error','Memo not found');
        }

        return view('edit')->with('memos_edit',$memo_edit);
    }

    //メモ更新処理
    public function edit(Request $request){

        // validateメソッドでmemoの値をチェック
        $request->validate([
            'memo' => 'required|max:1000',
        ]);

        // updateメソッドでDBに値を挿入
        $updateMemo = Memo::find($request->memo_id);  

        Log::debug($updateMemo);



        // 9/16 ここからNG==============
        $updateMemo->update([
            'memo' => $request->memo,
        ]);

        return to_route('memo');
    }

    //メモ登録画面への遷移
    public function create_view() {
        return view('create');
    }

    // メモ登録処理
    public function create(Request $request) {
        // validateメソッドでmemoの値をチェック
        $request->validate([
            'memo' => 'required|max:1000',
        ]);

        // createメソッドでDBに値を挿入
        Memo::create([
            'memo' => $request->memo,
        ]);
        return to_route('memo');
    }
}
