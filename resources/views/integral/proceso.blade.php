@include('grafos/clase-grafo')

@php
    Log::channel('integralGeneral')->notice('Se han recibido correctamente los datos de la hoja de ruta', [
            'description' => 'view::proceso funcionando',
        ]);

    $sizeArray = (int)$_GET['sizeArrayParam'];
    $camionData = [];
    $cantProductos = [];
    for($i = 0; $i < $sizeArray; $i++) {
        $camionData[$i] = $_GET['camionNumero_' . $i];
        $cantProductos[$i] = $_GET['cantProductos_' . $i];
    }

    foreach ($camionData as $key) {
        $camion = explode(";", $key);
        $camionArray[] = $camion;
    }
    /* var_dump($camionArray[0][1]); */
@endphp

@extends('layouts.plantilla')

@section('title', 'Trabajo Integral - Grafos y Lenguajes Formales')

@section('content')


<div class="container" id="proceso_de_ruta">
    <h1 class="text-center display-1">Proceso de Ruta</h1>

    @for($i = 0; $i < $sizeArray; $i++)
        <p>El camión {{ $camionArray[$i][1] }} se dirije al centro {{ $camionArray[$i][0] }} con {{ $cantProductos[$i] }} productos</p>
    @endfor

</div>


@endsection