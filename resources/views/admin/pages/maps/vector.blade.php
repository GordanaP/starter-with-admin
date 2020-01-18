@extends('layouts.admin.vendor_dashboard')

@section('title', 'Vector Maps')

@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/jvectormap/jquery-jvectormap.css') }}">
@endsection

@section('content')
    @adminPageHeader(['title' => 'Vector maps', 'item' => 'Maps'])
    @endadminPageHeader

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Jvectormap</h4>
                    <p class="card-description">Simple world map using jvectormap plugin</p>
                    <div id="vmap" class="vector-map" style="width: 100%; height:500px"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/jvectormap/jquery-jvectormap.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/maps.js') }}"></script>
@endsection