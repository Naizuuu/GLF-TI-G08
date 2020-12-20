@php
    Log::channel('trabajointegral')->notice('Se ingresó correctamente a homepage', [
            'description' => 'homepage funcionando',
        ]);
@endphp

@extends('layouts.plantilla')

@section('title', 'Trabajo Integral - Grafos y Lenguajes Formales')

@section('content')

<div class="container" id="homepage">
    <h1 class="text-center display-1">Trabajo Integral</h1>
    <p class="text-center lead">Grafos y Lenguajes Formales</p>
</div>

<form id="form" method="GET" autocomplete="off" style="display: none;" action="{{route('hoja_de_ruta')}}">
    <div class="containerParametros">   
        <h1 class="text-center display-3">Hoja de Ruta</h1>
        <p class="text-center lead">Use el archivo de parámetros para continuar</p>
        <textarea id="contenido_parametros" name="contenido_parametros" rows="4" cols="30" style="width:500px; height:300px; resize: none;" disabled></textarea>
        <input id="file_parametros" class="" enctype="multipart/form-data" type="file" accept=".txt" style="margin-top: 2%;" required>
    </div>

    <button type="submit" style="margin-bottom: 3%;" class="btn btn-lg btn-block custom-btn" onclick="">Confirmar</button>
</form>

@endsection