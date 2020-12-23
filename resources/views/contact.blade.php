<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Contact</title>

        <!-- Estilo CSS -->
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">

        <!-- Script JS -->
        <script src="{{ asset('js/uikit.min.js') }}"></script>

    </head>
    <body>
        <div class="uk-container uk-text-center">
            <h1 class="uk-heading-small header-text">Contact</h1>
            <p>Aquí es donde pondría mi correo electrónico... pero todavía no por si acaso.
            </p>
            <section uk-grid>
                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-card-body">
                        <h2 class="header-text">About</h2>
                        <p>Acerca de don Yo</p>
                        <a href="/about">
                            <button class="uk-button uk-button-primary">Go!</button>
                        </a>
                    </div>
                </div>
                <div class="uk-width-1-2@m">
                    <div class="uk-card uk-card-default uk-card-body">
                        <h2 class="header-text">Index</h2>
                        <p>Página principal</p>
                        <a href="/">
                            <button class="uk-button uk-button-primary">Go!</button>
                        </a>
                    </div>
                </div>
            </section>
        </div>
    </body>
</html>