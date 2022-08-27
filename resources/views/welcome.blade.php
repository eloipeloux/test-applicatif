<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="{{ asset('css/main.css') }}" rel="stylesheet">
        <script src="{{ asset('js/main.js') }}" defer></script>

        <title>HomeWork</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body>
        <div>
            <h1>Let's see those beautiful houses !</h1>
        </div>
        @include('form')
        @if (isset($html))
        <div class="row mt-5">
            {!! $html !!}
        </div>
        <button id="paint" class="btn btn-secondary mt-5" type="button">Paint it red</button>
        @endif
    </body>
</html>
