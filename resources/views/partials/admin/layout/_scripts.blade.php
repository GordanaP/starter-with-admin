<script src="{{ asset('vendor/purple-admin-pro/assets/vendors/js/vendor.bundle.base.js') }}"></script>
<script src="{{ asset('vendor/purple-admin-pro/assets/js/off-canvas.js') }}"></script>
<script src="{{ asset('vendor/purple-admin-pro/assets/js/hoverable-collapse.js') }}"></script>
<script src="{{ asset('vendor/purple-admin-pro/assets/js/misc.js') }}"></script>
<script src="{{ asset('vendor/purple-admin-pro/assets/js/settings.js') }}"></script>
<script src="{{ asset('vendor/purple-admin-pro/assets/js/todolist.js') }}"></script>

<script src="{{ asset('js/pluralize.js') }}"></script>
<script src="{{ asset('js/checkbox.js') }}"></script>

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