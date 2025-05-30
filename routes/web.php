<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DebtController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::middleware('guest')->group(function () {
    Route::prefix('login')->group(function () {
        Route::get('/', [AuthController::class, 'loginView'])->name('login');
        Route::post('/', [AuthController::class, 'login'])->name('login_post');
    });

    //PAGE-NOT-FOUND
    Route::get('/page-not-found', function () {
        return view('components.page-not-found');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('logout', [AuthController::class, 'logout']);
    Route::prefix('/')->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard_index');
    });

    Route::prefix('user')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('user_index');
        Route::get('/{id}', [UserController::class, 'data'])->name('user_data');
    });
    Route::prefix('debt')->group(function () {
        Route::get('/', [DebtController::class, 'index'])->name('debt_index');
    });
});
