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

            <div class="uk-width-1" id="index_descr">
                <div class="uk-card uk-card-default uk-card-body uk-text-left">
                    <!-- Haciendo uso de "Blade" de Laravel. -->
                    @yield("card4")
                </div>
            </div>
        </section>
    </div>
</body>
</html>