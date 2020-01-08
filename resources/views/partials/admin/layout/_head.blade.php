<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- CSRF Token -->
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }} | Admin | @yield('title', 'Dashboard')</title>

<!-- Scripts -->
{{-- <script src="{{ asset('js/app.js') }}"></script> --}}

<!-- Plugins -->
<link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/css/vendor.bundle.base.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/mdi/css/materialdesignicons.min.css') }}">
<link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/font-awesome/css/font-awesome.min.css') }}" />

<!-- Styles -->
{{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
<link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/css/demo_1/style.css') }}">
<link rel="shortcut icon" href="{{ asset('vendor/purple-admin-pro/assets/images/favicon.png') }}" />

@yield('links')