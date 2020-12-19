@php
    use Illuminate\Support\Facades\Log;

    $sizeArray = $_COOKIE['sizeArray'];
    $valores = [];

    for ($i = 0; $i < (int)$sizeArray; $i++) {
        $valores[$i] = $_COOKIE['valorN' . $i] . ';';
    }

    if(isset($sizeArray)) {
        Log::channel('trabajointegral')->notice('Se recibieron los datos del archivo de texto correctamente', [
            'description' => 'Datos recibidos',
        ]);
    } else {
        Log::channel('trabajointegral')->danger('No se pudieron recibir los datos del archivo de texto.', [
            'description' => 'Error al recibir los datos',
        ]);
    }
@endphp

@extends('layouts.plantilla')

@section('title', 'Trabajo Integral - Grafos y Lenguajes Formales')

@section('content')

@php
    var_dump($valores);
@endphp

<div class="container">
    <h1 class="text-center display-1">Coordenadas Ingresadas</h1>
</div>

@endsection