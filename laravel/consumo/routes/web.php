<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\ConsumoController;
Route::get('/',[ConsumoController::class, 'index']);
Route::get('/resultado',[ConsumoController::class, 'resultado']);
