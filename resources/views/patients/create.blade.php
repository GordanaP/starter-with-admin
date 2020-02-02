@extends('layouts.admin.app_dashboard')

@section('title', 'New Patient')

@section('content')
    @adminPageHeader(['title' => 'New patient', 'item' => 'Patients',
        'subtitle' => "Add new", 'route' => route('admin.patients.index')])
    @endadminPageHeader

    <div class="card px-4">
        <div class="card-body">
            @include('partials.patients._form', [
                'route' => route('admin.patients.store'),
                'doctor' => $doctor ?? null
            ])
        </div>
    </div>
@endsection
