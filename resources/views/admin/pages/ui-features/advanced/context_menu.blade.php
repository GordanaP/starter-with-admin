@extends('layouts.admin.vendor_dashboard')

@section('title', 'Context menu')

@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/jquery-contextmenu/jquery.contextMenu.min.css') }}">
@endsection

@section('content')
    @adminPageHeader(['title' => 'Context menu', 'item' => 'UI Elements'])
    @endadminPageHeader

    <div class="row">
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">simple</h4>
                    <p class="card-description"> A simple context menu </p>
                    <div class="card card-inverse-info" id="context-menu-simple">
                        <div class="card-body">
                            <p class="card-text"> Right click somewhere in this colored area for simple context menu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Access keys</h4>
                    <p class="card-description"> Context menu with actions </p>
                    <div class="card card-inverse-success" id="context-menu-access">
                        <div class="card-body">
                            <p class="card-text"> Right click in this colored area for context menu with action</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">keeping menu open</h4>
                    <p class="card-description"> Context menu that keeps opened </p>
                    <div class="card card-inverse-warning" id="context-menu-open">
                        <div class="card-body">
                            <p class="card-text"> Right click somewhere in this colored area for context menu that keeps opened</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Multi-level menu</h4>
                    <p class="card-description"> Context menu with sub menu </p>
                    <div class="card card-inverse-danger" id="context-menu-multi">
                        <div class="card-body">
                            <p class="card-text"> Right click somewhere in this colored area for context menu with multiple levels (sub menu) </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Menu on hover</h4>
                    <p class="card-description"> Context menu displayed on hover </p>
                    <div class="card card-inverse-success" id="context-menu-hover">
                        <div class="card-body">
                            <p class="card-text"> Hover this colored area for context menu</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Menu on hover with auto-hide</h4>
                    <p class="card-description"> Context menu with hide/show on louse in/out </p>
                    <div class="card card-inverse-primary" id="context-menu-hover-autohide">
                        <div class="card-body">
                            <p class="card-text"> Hover here for context menu and mouse out for hiding</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/jquery-contextmenu/jquery.contextMenu.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/context-menu.js') }}"></script>
@endsection
