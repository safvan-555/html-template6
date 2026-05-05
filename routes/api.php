<?php
use App\Http\Controllers\QuoteController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ServiceController;
use Illuminate\Support\Facades\Route;

Route::post('/quote', [QuoteController::class, 'store']);

Route::post('/admin/login', [AuthController::class, 'apiLogin']);

Route::middleware('auth:sanctum')->prefix('admin')->group(function () {
    Route::get('/services', [ServicePageController::class, 'getService']);
    Route::post('/logout', [AuthController::class, 'logout']);
});