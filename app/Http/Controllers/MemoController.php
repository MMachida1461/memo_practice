<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MemoController extends Controller
{
    ///memo/createのパスで渡ってきたら、detail.blade.phpを作成
    public function getMemo() {
        Log::debug("web.appからメソッドが呼び出されていることを確認");
        return view('detail');
    }
}
