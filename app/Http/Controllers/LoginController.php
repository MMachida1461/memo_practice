<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //ログイン画面の表示
    public function showLogin() {
        return view('memos.login');
    }

    /**
     * 認証の試行を処理
     */
    public function login(Request $request) {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->action([MemoController::class, 'index']);
        }
        
        return redirect()->route('login.showLogin')->with('error', 'メールアドレス、またはパスワードが違います');
    }

    public function logout(Request $request) {
        return view('memos.login');
    }
}
