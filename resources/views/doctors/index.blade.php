@extends('layouts.admin.app_dashboard')

@section('title', 'Doctors')

@section('links')
    @include('partials.datatables._links'),
@endsection

@section('content')

    @include('alerts._error')

    @adminPageHeader(['title' => 'Doctors', 'route' => route('admin.doctors.index')])
    @endadminPageHeader

    @datatable(['records' => 'Doctors'])
        <th>Id</th>
        <th>Name</th>
        <th>Expertises</th>
        <th class="text-center">Patients</th>
    @enddatatable
@endsection

@section('scripts')

    @include('partials.datatables._scripts'),

    <script>

        var records = 'Doctors';

        @include('partials.doctors._datatable')

        @include('partials.datatables._delete_records')

    </script>s

@endsection
