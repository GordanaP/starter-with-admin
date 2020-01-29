@extends('layouts.admin.app_dashboard')

@section('title', 'Edit Patient')

@section('content')
    @adminPageHeader(['title' => $patient->full_name, 'item' => 'Patients',
    'subtitle' => "Edit"]) @endadminPageHeader

    <div class="card px-4">
        <div class="card-body">

            @include('partials.patients._form', [
                'route' => route('admin.patients.update', $patient),
                'patient' => $patient
            ])

        </div>
    </div>
@endsection
