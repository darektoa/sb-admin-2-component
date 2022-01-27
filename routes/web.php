<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginView'])->name('login.loginView');
Route::post('/login', [AuthController::class, 'login'])->name('login'); 