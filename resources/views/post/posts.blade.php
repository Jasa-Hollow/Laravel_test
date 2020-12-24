<!-- Hereda la plantilla definida. -->
@extends('../layouts.Tposts')

<!-- ............................................... -->
<!-- Título de la pestaña -->
@php
    $title = "Posts";
@endphp
<!-- ............................................... -->

<!-- ............................................... -->
<!-- Encabezado -->
@section('conten')
    <form method="post">
        <fieldset class="uk-fieldset">

            <legend class="uk-legend">Legend</legend>

            <div class="uk-margin">
                <input class="uk-input" name="title" type="text" placeholder="Input">
            </div>

            <div class="uk-margin">
                <textarea class="uk-textarea" name="body" rows="5" placeholder="Textarea"></textarea>
            </div>

            <button type="submit" class="uk-button uk-button-primary"> Send </button>
        </fieldset>
    </form>
@endsection
<!-- ............................................... -->