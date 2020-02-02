@extends('layouts.admin.app_dashboard')

@section('title', 'Edit Patient')

@section('content')
    @adminPageHeader(['title' => $patient->full_name, 'item' => 'Patients',
        'subtitle' => "Edit", 'route' => route('admin.patients.index')])
    @endadminPageHeader

    <div class="card px-4">
        <div class="card-body">

            <div class="pull-right mb-4">
                <div class="btn-group" role="group" aria-label="Basic example">

                    @deleteForm(['route' => route('admin.patients.destroy', $patient)])
                    @enddeleteForm

                    <a href="{{ route('admin.patients.show', $patient) }}"
                    class="btn btn-info">
                        <i class="mdi mdi-eye"></i>
                    </a>

                </div>
            </div>

            @include('partials.patients._form', [
                'route' => route('admin.patients.update', $patient),
                'patient' => $patient
            ])

        </div>
    </div>
@endsection
