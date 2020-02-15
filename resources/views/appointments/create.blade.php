@extends('layouts.admin.app_dashboard')

@section('title', 'New appointment')

@section('content')
    @adminPageHeader(['title' => 'New appointment', 'item' => 'Appointments',
        'subtitle' => 'Create', 'route' => route('admin.appointments.index')
    ])
    @endadminPageHeader

    <div class="card">
        <div class="card-body">
            <form action="{{ route('admin.doctors.appointments.store', $doctor) }}"
            method="POST">

                @csrf

                <input type="hidden" name="patient" value="{{ request('patient') }}" />

                <div class="form_group">
                    @if ($patient = \App\Patient::find(request('patient')))
                        <div class="form-group">
                            <label for="patientId">The patient: @asterisks @endasterisks</label>
                            <select class="form-control" name="patient_id" id="patientId" read-only>
                                <option value="{{ $patient->id }}">
                                    {{ $patient->full_name }} {{ $patient->mrn }}
                                </option>
                            </select>
                        </div>
                    @else
                        <!-- First Name -->
                        <div class="form-group">
                            <label for="first_name">First name: @asterisks @endasterisks</label>
                            <input type="text" name="first_name" id="first_name"
                            class="form-control form-control-sm"
                            placeholder="First name" />
                        </div>

                        <!-- last Name -->
                        <div class="form-group">
                            <label for="last_name">Last name: @asterisks @endasterisks</label>
                            <input type="text" name="last_name" id="last_name"
                            class="form-control form-control-sm"
                            placeholder="Last name" />
                        </div>

                        <!-- Birthday  -->
                        <div class="form-group">
                            <label for="birthday">Date of birth: @asterisks @endasterisks</label>
                            <input type="text" name="birthday" id="birthday"
                            class="form-control form-control-sm"
                            placeholder="Date of birth" />
                        </div>

                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" name="phone" id="phone"
                            class="form-control form-control-sm"
                            placeholder="Phone number" />
                        </div>

                    @endif
                </div>

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="appDate">Appointment date: @asterisks @endasterisks</label>
                            <input type="text" name="app_date" name="appDate" class="form-control"
                            placeholder="yyyy-mm-dd">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="appTime">Appointment time: @asterisks @endasterisks</label>
                            <input type="text" name="app_time" name="appTime" class="form-control"
                            placeholder="hh:mm">
                        </div>
                    </div>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-gradient-primary mr-2 mt-2">
                    Submit
                </button>
            </form>
        </div>
    </div>

@endsection
