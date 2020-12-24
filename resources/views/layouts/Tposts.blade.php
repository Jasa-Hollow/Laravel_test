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
</head>
<body>
    <div class="uk-container uk-text-center">
        @yield('conten')
    </div>
</body>
</html>