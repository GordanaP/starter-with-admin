@extends('layouts.admin.vendor_dashboard')

@section('title', 'Flot Chart')

@section('content')
    @adminPageHeader(['title' => 'Flot chart', 'item' => 'Charts'])
    @endadminPageHeader

    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Pie chart</h4>
                    <div class="flot-chart-container">
                        <div id="pie-chart" class="flot-chart"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Line Chart</h4>
                <div class="flot-chart-container">
                    <div id="line-chart" class="flot-chart"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Bar Chart</h4>
                <div class="flot-chart-container">
                    <div id="column-chart" class="flot-chart"></div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Stacked Bar Chart</h4>
                <div class="flot-chart-container">
                    <div id="stacked-bar-chart" class="flot-chart"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Real-time Chart</h4>
                <div class="flot-chart-container">
                    <div id="realtime-chart" class="flot-chart"></div>
                </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                <h4 class="card-title">Area Chart</h4>
                <div class="flot-chart-container">
                    <div id="area-chart" class="flot-chart"></div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/flot/jquery.flot.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/flot/jquery.flot.categories.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/flot/jquery.flot.fillbetween.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/flot/jquery.flot.stack.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/flot/jquery.flot.pie.js') }}"></script>

    <script src="{{ asset('vendor/purple-admin-pro/assets/js/flot-chart.js') }}"></script>
@endsection