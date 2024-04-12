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
        </form>
    </div>
@endsection