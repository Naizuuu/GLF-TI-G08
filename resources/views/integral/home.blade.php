{{-- SIN USO ACTUALMENTE --}}

@extends('layouts.plantilla')

@section('title', 'Trabajo Integral - Grafos y Lenguajes Formales')

@section('content')

<div class="container" id="homepage">
    <div id="carga"></div>
    <h1 class="text-center display-1">Trabajo Integral</h1>
    <p class="text-center lead">Grafos y Lenguajes Formales</p>
</div>

<form id="form" method="GET" autocomplete="off" style="display: none;">
    <div class="containerParametros">   
        <textarea id="contenido_parametros" rows="4" cols="30" style="width:500px; height:300px; resize: none;" disabled></textarea>
        <input id="file_parametros" type="file" accept=".txt" style="margin-top: 2%;">
    </div>

    <button type="submit" style="margin-bottom: 3%;" class="btn btn-lg btn-block custom-btn" onclick="">Confirmar</button>
</form>

@endsection

{{-- SIN USO ACTUALMENTE --}}