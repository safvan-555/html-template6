<?php
use App\Http\Controllers\QuoteController;
use Illuminate\Support\Facades\Route;

Route::post('/quote', [QuoteController::class, 'store']);