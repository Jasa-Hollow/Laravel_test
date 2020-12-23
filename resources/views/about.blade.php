<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>About</title>

        <!-- Estilo CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">

        <!-- Script JS -->
        <script src="{{ asset('js/uikit.min.js') }}"></script>

    </head>
    <body>
        <div class="uk-container uk-text-center">
            <h1 class="uk-heading-small header-text">About</h1>
            <p>Mi nombre es Jasa, y soy un programador super novato.
            </p>
            <section uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-card-body">
                        <h2 class="header-text">Index</h2>
                        <p>Página principal</p>
                        <a href="/">
                            <button class="uk-button uk-button-primary">Go!</button>
                        </a>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-card-body">
                        <h2 class="header-text">Contact</h2>
                        <p>Contáctame así es</p>
                        <a href="/contact">
                            <button class="uk-button uk-button-primary">Go!</button>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>