<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials.admin.layout._head')
    </head>

    <body>

        @yield('content')

        @include('partials.admin.layout._scripts')
    </body>
</html>