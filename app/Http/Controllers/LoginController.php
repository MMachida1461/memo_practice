<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class LoginController extends Controller
{
    //ログイン画面の表示
    public function showLogin() {
        return view('login');
    }

    public function login() {
        Log::debug('ここまで');
        return redirect()->action([MemoController::class, 'index']);
    }
}
