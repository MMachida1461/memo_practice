<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;
use App\Http\Controllers\MemoController;

//メモ一覧ページに遷移する際のルーティング。MemoContorollerに渡す
Route::get('/memo', [MemoController::class, 'index']);

// メモをDBから取得するページの作成
Route::get('/memo/detail', [MemoController::class, 'getMemo']);


//まずは、idで呼び出した時のダミーのページを呼び出す処理を作成
Route::get('/memo/create', function(){
    return view('create');
});