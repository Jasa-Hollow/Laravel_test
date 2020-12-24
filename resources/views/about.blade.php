<!-- Hereda la plantilla definida. -->
@extends('layouts.template')

<!-- ............................................... -->
<!-- Título de la pestaña -->
@php
    $title = "About";
@endphp
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Encabezado -->
@section('header')
    <h1 class="uk-heading-small header-text">About</h1>
    <p>
        Mi nombre es Jasa, y soy un programador super novato.
    </p>
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Primera tarjeta -->
@section('card1')
    <h2 class="header-text">Index</h2>
    <p>Página principal</p>
    <a href="/">
        <button class="uk-button uk-button-primary">Go!</button>
    </a>
@endsection
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Segunda tarjeta -->
@section('card2')
    <h2 class="header-text">Contact</h2>
    <p>Contáctame así es</p>
    <a href="/contact">
        <button class="uk-button uk-button-primary">Go!</button>
    </a>
@endsection
<!-- ............................................... -->