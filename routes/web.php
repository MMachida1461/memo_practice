<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;
use App\Http\Controllers\MemoController;

//メモ一覧ページに遷移する際のルーティング。MemoContorollerに渡す
Route::get('/memo', [MemoController::class, 'index']);

// メモをDBから取得するページの作成
Route::get('/memo/detail', [MemoController::class, 'getMemo']);

//メモ登録画面
Route::get('/memo/create', [MemoController::class, 'create_view']);