@include('grafos/clase-grafo')

@php
    if(isset($_COOKIE['sizeArray'])) {
        $sizeArray = $_COOKIE['sizeArray'];
        $valores = [];
        for ($i = 0; $i < (int)$sizeArray; $i++) {
            $valores[$i] = $_COOKIE['valorN' . $i];
        }
        Log::channel('integralGeneral')->notice('Se recibieron los datos del archivo de texto correctamente', [
            'description' => 'Datos recibidos',
        ]);

        $grafo = new Grafo($valores);
    } else {
        Log::channel('integralGeneral')->danger('No se pudieron recibir los datos del archivo de texto.', [
            'description' => 'Error al recibir los datos',
        ]);
    }
@endphp

@extends('layouts.plantilla')

@section('title', 'Trabajo Integral - Grafos y Lenguajes Formales')

@section('content')


<div class="container">
    <h1 class="text-center display-1">Hoja de Ruta</h1>
    <form id="form" method="GET" autocomplete="off" style="margin-top: 4%;" action="{{route('hoja_de_ruta_proceso')}}">
        @for($i = 0; $i < $grafo->cantidadDeCentros; $i++)
        <div class="row" style="margin-top: 0%;">
            <div class="col-sm">
                <div class="form-group">
                    @if($i == 0) <label for="centroDistribucion_{{$i}}" class="form-label">Centro de distribución</label> @endif
                    <input type="text" name="centroDistribucion_{{$i}}" class="form-control" placeholder="C{{$i+1}}" disabled>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    @if($i == 0) <label for="camionNumero_{{$i}}" class="form-label">Camión asignado</label> @endif
                    <select class="custom-select" name="camionNumero_{{$i}}">
                        @for($j = 0; $j < $grafo->cantidadDeCentros; $j++)
                            <option value="{{'C' . $i . ';T'.$j}}" <?php if(isset($_GET['camionNumero_' . $i]) && $_GET['camionNumero_' . $i] == ('C' . $i. ';T' . $j)) { echo 'selected="selected"'; } ?>>Camión {{$j+1}}</option>
                        @endfor
                    </select>
                </div>
            </div>
            <div class="col-sm">
                <div class="form-group">
                    @if($i == 0) <label for="cantProductos_{{$i}}" class="form-label">Cantidad de productos (max. 1000):</label> @endif
                    <input type="number" name="cantProductos_{{$i}}" class="form-control" placeholder="0" value="<?php echo htmlspecialchars($_GET['cantProductos_' . $i] ?? '', ENT_QUOTES); ?>" min="0" max="1000">
                </div>
            </div>
        </div>
    @endfor   

{{-- if(isset($_COOKIE['sizeArray'])) {
        $sizeArray = $_COOKIE['sizeArray']; --}}

    @isset($grafo->cantidadDeCentros)
        <input type="text" style="display: none;" class="form-control" name="sizeArrayParam" value="{{$grafo->cantidadDeCentros}}">
    @endisset

    <button type="submit" style="margin-bottom: 3%;" class="btn btn-lg btn-block custom-btn" onclick="">Confirmar</button>
    </form>
</div>


@endsection