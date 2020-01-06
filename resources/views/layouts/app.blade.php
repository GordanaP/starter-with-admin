<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    @include('partials.app._head')
</head>
<body>
    <div id="app">

        @include('partials.app._navbar')

        <main class="py-4 container">
            @yield('content')
        </main>
    </div>

    @include('partials.app._scripts')
</body>
</html>
