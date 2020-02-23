@extends('layouts.admin.app_dashboard')

@section('title', 'New appointment')

@section('content')
    @adminPageHeader(['title' => 'Edit appointment', 'item' => 'Appointments',
        'subtitle' => 'Create', 'route' => route('admin.appointments.index')
    ])
    @endadminPageHeader

    <form action="{{ route('admin.appointments.update', $appointment) }}"
            method="POST">

                @csrf
                @method('PUT')

                <!-- The patient -->
                <div class="form_group">
                    <label for="patientId">The patient: @asterisks @endasterisks</label>
                    <select class="form-control" name="patient" id="patientId" read-only>
                        <option>
                            {{ $appointment->patient->full_name }} {{ $appointment->patient->mrn }}
                        </option>
                    </select>

                    @invalid(['field' => 'patient']) @endinvalid
                </div>

                <!-- The doctor -->
                <div class="form-group">
                    <label for="doctorId">The doctor: @asterisks @endasterisks</label>
                    <select class="form-control" id="doctorIdId" read-only>
                        <option>
                            {{ $appointment->doctor->full_name }}
                        </option>
                    </select>
                </div>

                <!-- The appointment -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="appDate">Appointment date: @asterisks @endasterisks</label>
                            <input type="text" name="app_date" name="appDate" class="form-control"
                            placeholder="yyyy-mm-dd"
                            value="{{ old('app_date') ?? (new App\Utilities\AppCarbon)->format($appointment->start_at) }}" />

                            @invalid(['field' => 'app_date']) @endinvalid
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="appTime">Appointment time: @asterisks @endasterisks</label>
                            <input type="text" name="app_time" name="appTime" class="form-control"
                            placeholder="hh:mm"
                            value="{{ old('app_time') ?? (new App\Utilities\AppCarbon)->format($appointment->start_at, $format="H:i") }}" />

                            @invalid(['field' => 'app_time']) @endinvalid
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-gradient-primary mr-2 mt-2">
                    Submit
                </button>
            </form>
@endsection

