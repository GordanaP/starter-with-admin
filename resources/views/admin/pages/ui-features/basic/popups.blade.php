@extends('layouts.admin.vendor_dashboard')

@section('title', 'Popups')

@section('content')
    @adminPageHeader(['title' => 'Popups', 'item' => 'UI Elements'])
    @endadminPageHeader

    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right">
                            <div class="wrapper text-center">
                                <h4 class="card-title">Alerts Popups</h4>
                                <p class="card-description">A basic message</p>
                                <button class="btn btn-outline-primary" onclick="showSwal('basic')">Click here!</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right">
                            <div class="wrapper text-center">
                                <h4 class="card-title">Alerts Popups</h4>
                                <p class="card-description">A title with a text under</p>
                                <button class="btn btn-outline-primary" onclick="showSwal('title-and-text')">Click here!</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                            <div class="wrapper text-center">
                                <h4 class="card-title">Alerts Popups</h4>
                                <p class="card-description">A success message!</p>
                                <button class="btn btn-outline-primary" onclick="showSwal('success-message')">Click here!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 d-flex justify-content-center border-right">
                            <div class="wrapper text-center">
                                <h4 class="card-title">Alerts Popups</h4>
                                <p class="card-description">A success message!</p>
                                <button class="btn btn-outline-primary" onclick="showSwal('custom-html')">Click here!</button>
                            </div>
                        </div>
                        <div class="<co></co>l-md-4 col-sm-6 d-flex justify-content-center border-right">
                            <div class="wrapper text-center">
                                <h4 class="card-title">Alerts Popups</h4>
                                <p class="card-description">A success message!</p>
                                <button class="btn btn-outline-primary" onclick="showSwal('warning-message-and-cancel')">Click here!</button>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 d-flex justify-content-center">
                            <div class="wrapper text-center">
                                <h4 class="card-title">Alerts Popups</h4>
                                <p class="card-description">A message with auto close timer</p>
                                <button class="btn btn-outline-primary" onclick="showSwal('auto-close')">Click here!</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="card-title">Avgrund Popup</h4>
                            <p class="card-description">Avgrund simple popup</p>
                            <a href="#" id="show" class="btn btn-outline-primary">Click here!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/sweetalert/sweetalert.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/jquery.avgrund/jquery.avgrund.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/alerts.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/avgrund.js') }}"></script>
@endsection