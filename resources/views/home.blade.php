@extends('layouts.app')

@section('content')
    @adminPageHeader(['title' => 'Doctor profile', 'item' => 'Doctors', 'subtitle' => "Profile"])
    @endadminPageHeader

    <div class="card">
        <div class="card-body">
            <h6 class="text-primary font-weight-bold text-uppercase tracking-wider">
                {{ $doctor->full_name }}

                <div class="row pull-right mb-4">
                    <div class="btn-group" role="group" aria-label="Basic example">

                        @deleteForm(['route' => route('admin.doctors.destroy', $doctor)])
                        @enddeleteForm

                        <a href="{{ route('admin.doctors.edit', $doctor) }}" class="btn btn-warning">
                            <i class="mdi mdi-file-check"></i>
                        </a>

                    </div>
                </div>
            </h6>

            <p class="text-gray-500">Ophthalmologist</p>

            @include('partials.doctors.details._tabs', [
                'doctor' => $doctor
            ])
        </div>
    </div>
@endsection
