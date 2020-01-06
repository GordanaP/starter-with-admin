<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        @include('partials/admin/layout/_head')
    </head>

    <body>
        <div class="container-scroller">

            @include('partials/admin/layout/_navbar')

            <div class="container-fluid page-body-wrapper">

                @include('partials/admin/layout/_settings')

                @include('partials/admin/layout/_sidebar')

                <div class="main-panel">
                    <div class="content-wrapper">

                        @yield('content')

                    </div>

                    @include('partials.admin.layout._footer')
                </div>
            </div>
        </div>

        @include('partials.admin.layout._scripts')
    </body>
</html>