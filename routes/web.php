<?php

use Illuminate\Support\Facades\Route;
use Monolog\Handler\RotatingFileHandler;
use App\Http\Controllers\MemoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Models\Memo;
use App\Models\User;
use Illuminate\Support\Facades\Log;

Route::prefix('/memos')->name('memos.')->group(function() {

    Route::get('', [MemoController::class, 'index'])->name('index');
    Route::get('create', [MemoController::class, 'create_view'])->name('create_view');
    Route::post('create', [MemoController::class, 'store'])->name('create');


    Route::prefix('/{id}')->name('id.')->group(function() {
        Route::get('', [MemoController::class, 'edit_view'])->name('edit_view');
        Route::post('/edit', [MemoController::class, 'edit'])->name('edit');
        Route::post('/delete', [MemoController::class, 'delete'])->name('delete');
    });
});

Route::prefix('/users')->name('users.')->group(function() {
    Route::get('/create',[UserController::class, 'create'])->name('create');
    Route::post('/create',[UserController::class, 'store'])->name('createUser');
});

Route::prefix('/login')->name('login.')->group(function() {
    Route::get('', [LoginController::class, 'showLogin'])->name('showLogin');
    Route::post('', [LoginController::class, 'login'])->name('login');
});

Route::get('/logout', [LoginController::class, 'logout'])->name('logout');