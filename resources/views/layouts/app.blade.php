<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('page-title')</title>
        <link rel="icon" type="image/x-icon" href="{{ Vite::asset('resources/img/dc-logo.png') }}">
        {{-- Fontawesome cdn --}}
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        {{-- Stili nell'head --}}
        <link rel="stylesheet" href="css/style.css">

        {{-- <!-- Includiamo gli assets con la direttiva @vite --> --}}
        @vite('resources/js/app.js')

        @yield('head-imports')
    </head>
    <body>
        @include('partials.header')

        <main>

            @yield('main-content')

        </main>

        @include('partials.footer')

        {{-- JS da importare nel body --}}
        @yield('body-imports')
    </body>
</html>
