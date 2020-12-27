<!-- Hereda la plantilla definida. -->
@extends('../layouts.Tposts')

<!-- ............................................... -->
<!-- Título de la pestaña -->
@php
    $title = "Posts";
@endphp
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Contenido de las vistas posts -->
@section('conten')
    <form method="post">
        <fieldset class="uk-fieldset">

            <legend class="uk-legend">
                Create post
            </legend>

            <div class="uk-margin">
                <input class="uk-input" name="title" type="text" placeholder="Title of video" autocomplete="off">
            </div>

            <div class="uk-margin">
                <textarea class="uk-textarea" name="zelda" rows="5" placeholder="Embed link of the video"></textarea>
            </div>

            <button type="submit" class="uk-button uk-button-primary"> 
                Send 
            </button>
        </fieldset>
    </form>
@endsection
<!-- ............................................... -->