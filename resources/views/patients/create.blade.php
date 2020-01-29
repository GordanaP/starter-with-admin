@extends('layouts.admin.app_dashboard')

@section('title', 'New Patient')

@section('content')
    @adminPageHeader(['title' => 'Patients', 'subtitle' => "Add new"])
    @endadminPageHeader

    <div class="card px-4">
        <div class="card-body">
            @include('partials.patients._form', [
                'route' => route('admin.patients.store'),
            ])

        </div>
    </div>
@endsection
