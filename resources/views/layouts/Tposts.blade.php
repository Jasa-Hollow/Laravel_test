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
    <div class="uk-cover-container uk-height-small navNav">
        <img src="{{ asset('img/header.svg') }}" alt="" uk-cover>
        <nav class="uk-navbar-container" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="/home">
                    <img src="{{ asset('img/logo_jasa.png') }}">
                </a>
                <ul class="uk-navbar-nav">
                    <li>
                        <a href="../"><i class="fas fa-home"></i> Home</a>
                    </li>
                    <li>
                        <a href="../about"><i class="fas fa-user-astronaut"></i> About</a>
                    </li>
                    <li>
                        <a href="../contact"><i class="fas fa-feather"></i> Contact</a>
                    </li>
                    <li>
                        <a href="/post/"><i class="fab fa-youtube"></i> Videos</a>
                    </li>
                </ul>
            </div>
            <div class="uk-navbar-right">
                <a href="/post/create">
                    <button class="uk-button uk-button-primary"> Add </button>
                </a>
            </div>
        </nav>
        <h1 class="uk-position-center uk-text-center">
            {{ $title }}
        </h1>
    </div>
    <div class="uk-container uk-text-center">
        @yield('conten')
        <section uk-grid>
            @yield('videos')
        </section>
    </div>
</body>
</html>