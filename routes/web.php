<?php

use Illuminate\Support\Facades\Route;

Route::get('/memo', function () {
    return view('memo');
});
