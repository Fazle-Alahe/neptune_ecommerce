<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});
Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/user/login', [UserController::class, 'user_login'])->name('user.login');
