<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\MemoController;
use Illuminate\Support\Facades\Log;

class CertificationController extends Controller
{
    //ログイン画面の表示
    public function showLogin()
    {
        return view('login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function login()
    {
        Log::debug('ここまで');
        return redirect()->action([MemoController::class, 'index']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
