<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class consumo extends Model
{
    use HasFactory;

    function calculoconsumo($distancia, $consumo_combustivel, $preco_litro) {
        return(($distancia / $consumo_combustivel) * $preco_litro);
    }

    public function consumo() {
        $valores["combustivel"] = $_GET["combustivel"];
        $valores["consumo"] = $this->calculo_consumo($_GET["distancia"],$_GET["consumocombustivel"],$_GET["precolitro"]);
        return $valores;
    }
}
