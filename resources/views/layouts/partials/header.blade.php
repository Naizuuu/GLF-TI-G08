<header class="masthead mb-auto">
    {{-- <div class="inner" style="{{request()->routeIs('index') ? 'display: none;' : 'display: block'}}"> --}}
    <div class="inner">
        <h3 class="masthead-brand">Empresa D</h3>
        <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link {{request()->routeIs('index') ? 'active' : ''}}" href="{{route('index')}}">Inicio</a>
            <a class="nav-link disabled {{request()->routeIs('hoja_de_ruta') ? 'active' : ''}}" href="{{route('hoja_de_ruta')}}">Hoja de Ruta</a> 
        </nav>
    </div>
</header>