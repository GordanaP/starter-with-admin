@extends('layouts.admin.app_dashboard')

@section('title', 'Doctors')

@section('links')
    @include('partials.datatables._links'),
@endsection

@section('content')

    @include('alerts._error')

    @adminPageHeader(['title' => 'Doctors', 'subtitle' => 'All'])
    @endadminPageHeader

    @datatable(['records' => 'Doctors', 'route' => route('admin.doctors.create')])
        <th>Id</th>
        <th>Name</th>
        <th>Expertises</th>
        <th class="text-center">Patients</th>
        <th class="text-center">Schedule</th>
        <th class="text-center">Appointments</th>
    @enddatatable
@endsection

@section('scripts')

    @include('partials.datatables._scripts'),

    <script>

        var records = 'Doctors';

        @include('partials.doctors._datatable')

        @include('partials.datatables._delete_records')

    </script>

@endsection
