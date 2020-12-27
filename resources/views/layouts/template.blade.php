<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        {{ $title }}
    </title>
    <link rel="icon" href="{{ asset('img/framework.svg') }}" type="image/svg" />

    <!-- Estilo CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">

    <!-- Script JS -->
    <script src="{{ asset('js/uikit.min.js') }}"></script>
    <script src="https://kit.fontawesome.com/05f4903dc9.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="uk-cover-container uk-height-medium">
        <img src="{{ asset('img/header.svg') }}" alt="" uk-cover>
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="/home">
                    <img src="{{ asset('img/logo_jasa.png') }}">
                </a>
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="/"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="/about"><i class="fas fa-user-astronaut"></i> About</a>
                    </li>
                    <li>
                        <a href="/contact"><i class="fas fa-feather"></i> Contact</a>
                    </li>
                    <li>
                        <a href="/post/"><i class="fab fa-youtube"></i> Videos</a>
                    </li>
                </ul>
            </div>
        </nav>
        <div class="uk-position-center uk-text-center">
            @yield('header')
        </div>
    </div>
    <div class="uk-container uk-text-center">
        <section uk-grid>
            <div class="uk-width-1-3@m">
                <div class="uk-card uk-card-default uk-card-body">
                    <!-- Haciendo uso de "Blade" de Laravel. -->
                    @yield("card1")
                </div>
            </div>

            <div class="uk-width-1-3@m">
                <div class="uk-card uk-card-default uk-card-body">
                    @yield('card2')
                </div>
            </div>

            <div class="uk-width-1-3@m">
                <div class="uk-card uk-card-default uk-card-body">
                    @yield('card3')
                </div>
            </div>
        </section>
    </div>
</body>
</html>
