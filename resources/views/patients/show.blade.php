@extends('layouts.admin.app_dashboard')

@section('title', 'Show Patient')

@section('content')
    @adminPageHeader(['title' => 'Patient\'s record', 'item' => 'Patients',
        'subtitle' => "Record", 'route' => route('admin.patients.index')])
    @endadminPageHeader

    <div class="card">
        <div class="card-body">
            <h6 class="text-primary font-weight-bold text-uppercase tracking-wider">
                {{ $patient->full_name }}

                <div class="pull-right mb-4">
                    <div class="btn-group" role="group" aria-label="Basic example">

                        @deleteForm(['route' => route('admin.patients.destroy', $patient)])
                        @enddeleteForm

                        <a href="{{ route('admin.patients.edit', $patient) }}"
                        class="btn btn-warning">
                            <i class="mdi mdi-lead-pencil"></i>
                        </a>

                    </div>
                </div>
            </h6>

            <p class="text-gray-500">{{ $patient->mrn }}</p>

            @include('partials.patients.details._tabs')
        </div>
    </div>
@endsection
