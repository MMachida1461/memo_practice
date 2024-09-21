<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CertificationController;
use App\Models\Memo;
use App\Models\User;


Route::prefix('/memos')->name('memos.')->group(function() {
    //メモ一覧ページに遷移する際のルーティング。MemoContorollerに渡す
    Route::get('', [MemoController::class, 'index'])->name('index');

    Route::prefix('/{id}')->group(function() {
        // メモをDBから取得するページの作成
        Route::get('', [MemoController::class, 'getMemo'])->name('detail');
        Route::get('/edit', [MemoController::class, 'edit_view'])->name('edit_view');

        //メモ編集画面で更新ボタンが押された時の処理
        Route::post('/edit', [MemoController::class, 'edit'])->name('edit');
        //メモ詳細画面で削除ボタンが押下された時の処理
        Route::get('/delete', [MemoController::class, 'delete'])->name('delete');
    });

    //メモ登録画面
    Route::get('/create', [MemoController::class, 'create_view']);
    //メモ登録画面で作成ボタンが押された時の処理
    Route::post('/create', [MemoController::class, 'create'])->name('create');
});



//ユーザー登録画面の表示
Route::get('/users/create',[UserController::class, 'create']);
Route::post('/users/create',[UserController::class, 'store'])->name('createUser');


//ログイン画面の表示
Route::get('/login', [CertificationController::class, 'showLogin']);
Route::post('/login', [CertificationController::class, 'login'])->name('login');