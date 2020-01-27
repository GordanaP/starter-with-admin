@extends('layouts.admin.app_dashboard')

@section('title', 'Edit Doctor')

@section('content')
    <div class="card px-4">
        <div class="card-body">
            @include('partials.doctors._form', [
                'route' => route('admin.doctors.update', $doctor),
                'doctor' => $doctor
            ])
        </div>
    </div>
@endsection
