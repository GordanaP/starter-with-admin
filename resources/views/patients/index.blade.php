@extends('layouts.admin.app_dashboard')

@section('title', 'Patients')

@section('links')
    @include('partials.datatables._links'),
@endsection

@section('content')

    @include('alerts._error')

    @adminPageHeader(['title' => 'Patients', 'route' => route('admin.patients.index')])
    @endadminPageHeader

    @datatable(['records' => 'Patients', 'route' => route('admin.patients.create')])
        <th>Id</th>
        <th>Name</th>
        <th>Birth Date</th>
        <th>MRN</th>
        <th>Doctor</th>
    @enddatatable
@endsection

@section('scripts')

    @include('partials.datatables._scripts'),

    <script>

        var records = 'Patients';
        var parent = null;
        var parentId = null;

        @include('partials.patients._datatable')

        @include('partials.datatables._delete_records')

    </script>

@endsection
