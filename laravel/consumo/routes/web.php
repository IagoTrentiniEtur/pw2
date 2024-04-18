<?php

use Illuminate\Support\Facades\Route;

use App\http\Controllers\ConsumoController;
Route::get('/', [CombustivelController::class, 'index']);

Route::get('/gasto', [CombustivelController::class, 'gasto']);