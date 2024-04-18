<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Consumo;

class ConsumoController extends Controller
{
    public function index() {
        return view('index');
    }

    public function gasto() {
        $Consumo = new Consumo();

        $combustivel = $Consumo->combustivel();
        $valor = $Consumo->calcular();

        return view('resultado',['combustivel'=>$combustivel,'valor'=>$valor]);
    }
}
