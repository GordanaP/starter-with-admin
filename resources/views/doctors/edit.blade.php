@extends('layouts.admin.app_dashboard')

@section('title', 'Edit Doctor')

@section('content')
    @adminPageHeader(['title' => $doctor->full_name.', MD', 'item' => 'Doctors',
    'subtitle' => "Edit", 'route' => route('admin.doctors.index')])
    @endadminPageHeader

    <div class="card px-4">
        <div class="card-body">

            <div class="pull-right mb-4">
                <div class="btn-group" role="group" aria-label="Basic example">

                    @deleteForm(['route' => route('admin.doctors.destroy', $doctor)])
                    @enddeleteForm

                    <a href="{{ route('admin.doctors.show', $doctor) }}"
                    class="btn btn-info">
                        <i class="mdi mdi-eye"></i>
                    </a>

                </div>
            </div>

            @include('partials.doctors._form', [
                'route' => route('admin.doctors.update', $doctor),
                'doctor' => $doctor
            ])
        </div>
    </div>
@endsection
