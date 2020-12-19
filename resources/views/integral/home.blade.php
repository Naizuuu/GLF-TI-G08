{{-- SIN USO ACTUALMENTE --}}

@extends('layouts.plantilla')

@section('title', 'Trabajo Integral - Grafos y Lenguajes Formales')

@section('content')

@php
    $sizeArray = $_COOKIE['sizeArray'];
    $valores = [];

    for ($i = 0; $i < (int)$sizeArray; $i++) {
        $valores[$i] = $_COOKIE['valorN' . $i] . ';';
    }
    var_dump($valores);
@endphp

<div class="container">
    <h1 class="text-center display-1">Coordenadas Ingresadas</h1>
</div>

@endsection