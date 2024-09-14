<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;

Route::get('/memo', function () {
    return view('memo');
});

//まずは、idで呼び出した時のダミーのページを呼び出す処理を作成
Route::get('/memo/create', function(){
    return view('create');
});