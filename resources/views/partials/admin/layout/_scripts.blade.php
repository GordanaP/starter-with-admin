<script src="{{ asset('vendor/purple-admin-pro/assets/vendors/chart.js/Chart.min.js') }}"></script>
<script src="{{ asset('vendor/purple-admin-pro/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
<script src="{{ asset('vendor/purple-admin-pro/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('vendor/purple-admin-pro/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('vendor/purple-admin-pro/assets/js/misc.js') }}"></script>
<script src="{{ asset('vendor/purple-admin-pro/assets/js/settings.js') }}"></script>
<script src="{{ asset('vendor/purple-admin-pro/assets/js/todolist.js') }}"></script>
<script src="{{ asset('vendor/purple-admin-pro/assets/js/dashboard.js') }}"></script>

<script>

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        statusCode: {
            401: function() {
                redirectTo("{{ route('login') }}")
            },
            403: function() {
                alert('The action is unauthorized');
            }
        }
    });

</script>

@yield('scripts')