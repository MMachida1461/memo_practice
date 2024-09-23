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
        $memos = Memo::all();
        return view('memo')->with('memos',$memos);
    }

    //メモ編集画面への遷移
    public function edit_view(Request $request, int $id) {
        $memo_edit = Memo::findOrFail($id);
        
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
        $updateMemo->update([
            'memo' => $request->memo,
        ]);
        return redirect()->route('memos.index');
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
        return redirect()->route('memos.index');

    }
    // メモ削除処理
    public function delete(Request $request, int $id){
        $memo_delete = Memo::findOrFail($id);
        $memo_delete->delete();
        
        return redirect()->route('memos.index');
    }
}