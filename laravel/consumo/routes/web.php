<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ConsumoController;
Route::get('/', [ConsumoController::class, 'index']);

Route::get('/gasto', [ConsumoController::class, 'gasto']);