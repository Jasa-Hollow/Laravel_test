<!-- Hereda la plantilla definida. -->
@extends('../layouts.Tposts') @extends('../layouts.navbar')

<!-- ............................................... -->
<!-- Título de la pestaña -->
@php
    $title = "Hilos de Fuego";
    $nav = ["../", "../about", "../contact", "/post/"];
@endphp
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Contenido de las vistas posts -->
@section('conten')
    <form method="post" action="/post/">
        <div class="uk-card uk-card-default uk-card-body uk-inline-clip uk-transition-toggle uk-width-1">
            <fieldset class="uk-fieldset">

            <legend class="uk-legend uk-transition-slide-top-small">
                Create post
            </legend>

            <div class="uk-margin uk-text-left">
                <legend class="uk-legend uk-transition-slide-top-small">
                    Title
                </legend>
                <input class="uk-input uk-transition-slide-top-small" name="title" type="text" placeholder="Title of video" autocomplete="off">
                <!--  -->
                {{ csrf_field() }}
            </div>

            <div class="uk-margin uk-text-left">
                <legend class="uk-legend uk-transition-slide-bottom-small">
                    Embed Link
                </legend>
                <textarea class="uk-textarea uk-transition-slide-bottom-small" name="zelda" rows="5" placeholder="Embed link of the video"></textarea>
                {{ csrf_field() }}
            </div>

            <button type="submit" class="uk-button uk-button-primary uk-transition-slide-bottom-small"> 
                Send 
            </button>
        </fieldset>
        </div>
    </form>
    @if (count($errors) > 0)
        @foreach($errors->all() as $error)
            <div class="uk-alert-warning" uk-alert>
                <a class="uk-alert-close" uk-close></a>
                <h3>Error!</h3>
                <p>{{ $error }}</p>
            </div>
        @endforeach
    @endif
@endsection
<!-- ............................................... -->