<?php

namespace App\Http\Controllers\Web;

use Illuminate\Support\Facades\Route;

Route::get('/login', [AuthController::class, 'loginView'])->name('login.loginView');
Route::post('/login', [AuthController::class, 'login'])->name('login');


// WITH AUTHENTICATION
Route::middleware('auth')->group(function() {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // TRANSACTION
    Route::get('/transactions', [TransactionController::class, 'index'])->name('transactions.index');

    // USER
    Route::prefix('/users')->name('users.')->group(function() {
        Route::get('/', [UserController::class, 'index'])->name('index');
    });
});