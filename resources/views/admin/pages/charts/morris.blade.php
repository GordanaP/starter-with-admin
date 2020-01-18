@extends('layouts.admin.vendor_dashboard')

@section('title', 'Morris')

@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/morris.js/morris.css') }}">
@endsection

@section('content')
    @adminPageHeader(['title' => 'Morris', 'item' => 'Charts'])
    @endadminPageHeader

    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Line chart</h4>
                    <div id="morris-line-example"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Bar chart</h4>
                    <div id="morris-bar-example"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Area chart</h4>
                    <div id="morris-area-example"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Doughnut chart</h4>
                    <div id="morris-donut-example"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/morris.js/morris.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/morris.js') }}"></script>
@endsection