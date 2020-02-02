@extends('layouts.admin.app_dashboard')

@section('title', 'Show Doctor')

@section('links')
    @include('partials.datatables._links')
@endsection

@section('content')
    @adminPageHeader(['title' => 'Doctor\'s profile', 'item' => 'Doctors',
        'subtitle' => "Profile", 'route' => route('admin.doctors.index')])
    @endadminPageHeader

    <div class="card">
        <div class="card-body">
            <h6 class="text-primary font-weight-bold text-uppercase tracking-wider">
                {{ $doctor->full_name }}

                <div class="pull-right mb-4">
                    <div class="btn-group" role="group" aria-label="Basic example">

                        @deleteForm(['route' => route('admin.doctors.destroy', $doctor)])
                        @enddeleteForm

                        <a href="{{ route('admin.doctors.edit', $doctor) }}"
                        class="btn btn-warning">
                            <i class="mdi mdi-lead-pencil"></i>
                        </a>

                    </div>
                </div>
            </h6>

            <p class="text-gray-500">Ophthalmologist</p>

            @include('partials.doctors.details._tabs')
        </div>
    </div>
@endsection

@section('scripts')
    @include('partials.datatables._scripts')

    <script src="{{ asset('vendor/purple-admin-pro/assets/js/tabs.js') }}"></script>

    <script>

        var records = 'Patients';
        var parent = 'doctors';
        var parentId = "{{ $doctor->id }}";

        @include('partials.patients._datatable')

        @include('partials.datatables._delete_records')

    </script>
@endsection