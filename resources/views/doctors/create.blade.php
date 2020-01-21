@extends('layouts.admin.app_dashboard')

@section('title', 'New Doctor')

@section('content')
    @adminPageHeader(['title' => 'Doctors', 'subtitle' => "Add new"])
    @endadminPageHeader

    <div class="card px-4">
        <div class="card-body">

            @include('partials.doctors._form', [
                'route' => route('admin.doctors.store'),
            ])

        </div>
    </div>
@endsection
