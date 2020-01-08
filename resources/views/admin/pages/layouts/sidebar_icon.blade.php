@extends('layouts.admin')

@section('title', 'Sidebar Icon')

@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}">
@endsection

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white mr-2">
                <i class="mdi mdi-home"></i>
            </span>
            Dashboard
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                    <span></span>Overview
                    <i class="mdi mdi-alert-circle-outline icon-sm text-primary align-middle"></i>
                </li>
            </ul>
        </nav>
    </div>

    @include('partials/admin/dashboard/_stat_panels')

    @include('partials/admin/dashboard/_sales_stat')

    @include('partials/admin/dashboard/_recent_tickets')

    @include('partials/admin/dashboard/_recent_updates')

    @include('partials/admin/dashboard/_project_status')
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/dashboard.js') }}"></script>
@endsection
