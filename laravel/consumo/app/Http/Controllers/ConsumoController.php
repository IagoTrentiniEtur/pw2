<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsumoController extends Controller
{
    public function index() {
        return view('consumo');
    }

    public function resultado() {
        $consumo = new Consumo();
        $resultadoconsumo = $consumo->consumo();
        return view('resultado');
    }
}
