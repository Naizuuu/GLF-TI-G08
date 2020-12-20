@php
    $url = Request::url();
    Log::channel('integralError')->error('Se produjo un error al intentar acceder a la página', [
            'description' => 'Page not found (' . $url . ')',
        ]);
@endphp

@extends('layouts.plantilla')

@section('title', 'Trabajo Integral - Page not found')

@section('content')

<div class="container" id="homepage">
    <h1 class="text-center display-1">Error 404</h1>
    <p class="text-center lead">Page not found</p>
</div>

@endsection