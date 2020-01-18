@extends('layouts.admin.vendor_dashboard')

@section('title', 'Code Editors')

@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/codemirror/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/codemirror/ambiance.css') }}">
@endsection

@section('content')
    @adminPageHeader(['title' => 'Code editors', 'item' => 'Forms'])
    @endadminPageHeader


@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/ace-builds/src-min/ace.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/ace-builds/src-min/mode-javascript.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/ace-builds/src-min/theme-chaos.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/codemirror/codemirror.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/codemirror/javascript.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/codemirror/shell.js') }}"></script>

    <script src="{{ asset('vendor/purple-admin-pro/assets/js/codeEditor.js') }}"></script>
@endsection
