<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;
use App\Http\Controllers\MemoController;

//メモ一覧ページに遷移する際のルーティング。MemoContorollerに渡す
Route::get('/memo', [MemoController::class, 'index'])->name('memo');

// メモをDBから取得するページの作成
Route::get('/memo/detail', [MemoController::class, 'getMemo']);

Route::get('/memo/detail/edit', [MemoController::class, 'edit_view']);
//メモ編集画面で更新ボタンが押された時の処理
Route::post('/memo/detail/edit', [MemoController::class, 'create'])->name('create');

//メモ登録画面
Route::get('/memo/create', [MemoController::class, 'create_view']);

//メモ登録画面で作成ボタンが押された時の処理
Route::post('/memo/create', [MemoController::class, 'create'])->name('create');
