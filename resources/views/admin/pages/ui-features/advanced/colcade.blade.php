@extends('layouts.admin.vendor_dashboard')

@section('title', 'Colcade')

@section('content')
    @adminPageHeader(['title' => 'Colcade', 'item' => 'UI Elements'])
    @endadminPageHeader

    <div class="row mb-4">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Colcade Grid</h4>
                    <p class="page-description">Colcade works by moving item elements into column elements.</p>
                    <div class="grid">
                        <div class="grid-col grid-col--1"></div>
                        <div class="grid-col grid-col--2"></div>
                        <div class="grid-col grid-col--3"></div>
                        <div class="grid-col grid-col--4"></div>
                        <div class="grid-item grid-item--b"></div>
                        <div class="grid-item grid-item--a"></div>
                        <div class="grid-item grid-item--c"></div>
                        <div class="grid-item grid-item--a"></div>
                        <div class="grid-item grid-item--a"></div>
                        <div class="grid-item grid-item--b"></div>
                        <div class="grid-item grid-item--c"></div>
                        <div class="grid-item grid-item--b"></div>
                        <div class="grid-item grid-item--a"></div>
                        <div class="grid-item grid-item--c"></div>
                        <div class="grid-item grid-item--a"></div>
                        <div class="grid-item grid-item--a"></div>
                        <div class="grid-item grid-item--b"></div>
                        <div class="grid-item grid-item--c"></div>
                        <div class="grid-item grid-item--b"></div>
                        <div class="grid-item grid-item--a"></div>
                        <div class="grid-item grid-item--c"></div>
                        <div class="grid-item grid-item--a"></div>
                        <div class="grid-item grid-item--a"></div>
                        <div class="grid-item grid-item--b"></div>
                        <div class="grid-item grid-item--c"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/colcade/colcade.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/tight-grid.js') }}"></script>
@endsection
