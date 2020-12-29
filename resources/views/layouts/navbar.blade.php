<!-- Definición del contenedor de la barra de navegación, según su vista. -->
@if($title != "Hilos de Fuego")
    <div class="uk-cover-container uk-height-medium">
@elseif($title == "Hilos de Fuego")
    <div class="uk-cover-container uk-height-small navNav">
@endif
    @yield('navbar')
    <img src="{{ asset('img/header.svg') }}" alt="" uk-cover>
    <nav class="uk-navbar-container" uk-navbar>
        <div class="uk-navbar-left">
            <a class="uk-navbar-item uk-logo" href="/home">
                <img src="{{ asset('img/logo_jasa.png') }}">
            </a>
            <ul class="uk-navbar-nav">
                <li>
                    <a href="{{ $nav[0] }}"><i class="fas fa-home"></i> Home</a>
                </li>
                <li>
                    <a href="{{ $nav[1] }}"><i class="fas fa-user-astronaut"></i> About</a>
                </li>
                <li>
                    <a href="{{ $nav[2] }}"><i class="fas fa-feather"></i> Contact</a>
                </li>
                <li>
                    <a href="{{ $nav[3] }}"><i class="fab fa-youtube"></i> Videos</a>
                </li>
            </ul>
        </div>
        <!-- Sí se encuentra dentro de los posts. -->
        @if ($title == "Hilos de Fuego")
            <div class="uk-navbar-right">
                <a href="/post/create"> 
                    <button class="uk-button uk-button-primary"  id="btn-add"> 
                        Add 
                    </button>
                </a>
            </div>
        @endif
    </nav>
    <!-- Sí se encuentra fuera de los posts. -->
    @if ($title != "Hilos de Fuego")
        <div class="uk-position-center uk-text-center">
            @yield('header')
        </div>
    @elseif($title == "Hilos de Fuego")
        <h1 class="uk-position-center uk-text-center">
            {{ $title }}
        </h1>
    @endif
</div>
