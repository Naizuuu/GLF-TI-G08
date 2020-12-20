@include('grafos/clase-grafo')

@php
    Log::channel('integralGeneral')->notice('Se han recibido correctamente los datos de la hoja de ruta', [
            'description' => 'view::proceso funcionando',
        ]);
@endphp

@extends('layouts.plantilla')

@section('title', 'Trabajo Integral - Grafos y Lenguajes Formales')

@section('content')


<div class="container">
    <h1 class="text-center display-1">Proceso de Ruta</h1>
</div>


@endsection