@extends('layouts.admin.dashboard')

@section('title', 'C3 Chart')

@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/c3/c3.min.css') }}">
@endsection

@section('content')
    @adminPageHeader(['title' => 'C3', 'item' => 'Charts'])
    @endadminPageHeader

    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Line chart</h4>
                    <div id="c3-line-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Spline chart</h4>
                    <div id="c3-spline-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Step chart</h4>
                    <div id="c3-step-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Bar chart</h4>
                    <div id="c3-bar-chart"></div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pie chart</h4>
                    <div id="c3-pie-chart"></div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Donut chart</h4>
                    <div id="c3-donut-chart"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/d3/d3.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/c3/c3.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/c3.js') }}"></script>
@endsection