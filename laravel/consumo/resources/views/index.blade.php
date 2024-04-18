@extends('layout.app')
@section('title',$title)
@section('content')
    <div>
        <form action="{{url('/resultado')}}" method="get">
            <label for="combustivel">Combustível</label>
            <select id="lcombustivel" name="combustivel">
                <option value="gasolina">Gasolina</option>
                <option value="diesel">Diesel</option>
                <option value="etanol">Etanol</option>
            </select><br/>
            <label id="lprecolitro" for="precolitro">Preço por litro:</label>
            <input type="number" step="0.01" name="precolitro"><br/>
            <label id="ldistancia" for="distancia">Distância em quilometros a ser percorrida:</label>
            <input type="number" name="distancia"><br/>
            <label id="lconsumocombustivel" for="consumocombustivel">Consumo de combustível do veículo (km/l)</label>
            <input type="number" name="consumocombustivel"><br/>
            <button type="submit">Enviar</button>
        </form>
    </div>
@endsection