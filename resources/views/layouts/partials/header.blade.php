<header class="masthead mb-auto">
    {{-- <div class="inner" style="{{request()->routeIs('index') ? 'display: none;' : 'display: block'}}"> --}}
    <div class="inner">
        <h3 class="masthead-brand">Empresa D</h3>
        <nav class="nav nav-masthead justify-content-center">
            <a class="nav-link {{request()->routeIs('index') ? 'active' : ''}}" href="{{route('index')}}">Inicio</a>
            {{-- <a class="nav-link {{request()->routeIs('automatas') ? 'active' : ''}}" href="{{route('automatas')}}">Autómatas</a>
            <a class="nav-link disabled {{request()->routeIs('automata_afd') ? 'active' : ''}}" href="{{route('automata_afd')}}">AFD</a>
            <a class="nav-link disabled {{request()->routeIs('automata_ap') ? 'active' : ''}}" href="{{route('automata_ap')}}">AP</a> --}}
        </nav>
    </div>
</header>