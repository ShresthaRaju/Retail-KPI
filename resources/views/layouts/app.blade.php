<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials._head')
    </head>
    <body>
        <div id="app">
           @yield('content')
        </div>
        @include('partials._scripts')
    </body>
</html>
