@extends('layouts.admin.vendor_dashboard')

@section('title', 'Mapael')

@section('content')
    @adminPageHeader(['title' => 'Mapael', 'item' => 'Maps'])
    @endadminPageHeader

    <div class="row">
        <div class="col-lg-6 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Example 1</h4>
                    <div class="container">
                        <div class="mapcontainer mapael-example-1">
                            <div class="map"><span>Alternative content for the map</span></div>
                            <div class="myLegend"><span>Alternative content for the legend</span></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-6 stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Example 2</h4>
                    <div class="container">
                        <div class="mapcontainer mapael-example-2 bg-blue">
                            <div class="map">
                                <span>Alternative content for the map</span>
                            </div>
                            <div style="margin:auto;">
                                <div class="population" style="float:left;margin-right:40px;">
                                    <span>Alternative content for the legend</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/raphael/raphael.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/jquery-mapael/jquery.mapael.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/jquery-mapael/world_countries.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/jquery-mapael/usa_states.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/jquery-mapael/france_departments.min.js') }}"></script>

    <script src="{{ asset('vendor/purple-admin-pro/assets/js/mapael.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/mapael_example_1.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/mapael_example_2.js') }}"></script>
@endsection