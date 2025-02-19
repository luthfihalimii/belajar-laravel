<?php

use App\Http\Controllers\Court_TypeController;
use App\Http\Controllers\CourtController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/court-type', [Court_TypeController::class, 'index']);
Route::post('/court-type', [Court_TypeController::class, 'store']);

Route::resource('court', CourtController::class);
