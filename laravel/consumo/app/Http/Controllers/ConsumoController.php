<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ConsumoController extends Controller
{
    public function index() {
        return view('consumo');
    }

    public function gasto() {
        $consumo = new consumo();

        $combustivel = $consumo->combustivel();
        $valor = $consumo->calcular();

        return view('resultado',['combustivel'=>$combustivel,'valor'=>$valor]);
    }
}
