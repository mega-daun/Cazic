<?php

use App\Http\Controllers\UserBalanceController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
    Route::get('/balance', [UserBalanceController::class, 'getBalance'])->name('balance.get');
    Route::patch('/balance', [UserBalanceController::class, 'setBalance'])->name('balance.set');
});
