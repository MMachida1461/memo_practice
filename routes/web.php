<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

Route::get('/memo', function () {
    return view('memo');
});

// メモをDBから取得するページの作成
Route::get('/memo/detail', function(){
    return view('detail');
});

//まずは、idで呼び出した時のダミーのページを呼び出す処理を作成
Route::get('/memo/create', function(){
    return view('create');
});