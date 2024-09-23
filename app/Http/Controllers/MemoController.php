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
        return view('memos.memo')->with('memos',$memos);
    }

    //メモ編集画面への遷移
    public function edit_view(Request $request, int $id) {
        $memo_edit = Memo::findOrFail($id);
        return view('memos.edit')->with('memos_edit',$memo_edit);
    }

    //メモ更新処理
    public function edit(Request $request, int $id){
        $request->validate([
            'memo' => 'required|max:1000',
        ]);

        $updateMemo = Memo::find($id);
        $updateMemo->fill($request->all())->save();
        return redirect()->route('memos.index');
    }

    //メモ登録画面への遷移
    public function create_view() {
        return view('memos.create');
    }

    // メモ登録処理
    public function store(Request $request) {
        $request->validate([
            'memo' => 'required|max:1000',
        ]);

        $createMemo = new Memo();
        $createMemo->fill($request->all())->save();
        return redirect()->route('memos.index');

    }
    // メモ削除処理
    public function delete(Request $request, int $id){
        Memo::destroy($id);
        
        return redirect()->route('memos.index');
    }
}