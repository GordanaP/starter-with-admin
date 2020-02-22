<!-- The patient -->
<div class="form_group">
    @if ($patient)
        <div class="form-group">
            <label for="patientId">The patient: @asterisks @endasterisks</label>
            <select class="form-control" name="patient" id="patientId" read-only>
                <option value="{{ $patient->id }}">
                    {{ $patient->full_name }} {{ $patient->mrn }}
                </option>
            </select>

            @invalid(['field' => 'patient']) @endinvalid
        </div>
    @else
        <!-- First Name -->
        <div class="form-group">
            <label for="first_name">First name: @asterisks @endasterisks</label>
            <input type="text" name="first_name" id="firstName"
            class="form-control form-control-sm"
            placeholder="First name"
            value="{{ old('first_name') }}" />

            @invalid(['field' => 'first_name']) @endinvalid
        </div>

        <!-- last Name -->
        <div class="form-group">
            <label for="last_name">Last name: @asterisks @endasterisks</label>
            <input type="text" name="last_name" id="lastName"
            class="form-control form-control-sm"
            placeholder="Last name"
            value="{{ old('last_name') }}" />

            @invalid(['field' => 'last_name']) @endinvalid
        </div>

        <!-- Birthday  -->
        <div class="form-group">
            <label for="birthday">Date of birth: @asterisks @endasterisks</label>
            <input type="text" name="birthday" id="birthday"
            class="form-control form-control-sm"
            placeholder="Date of birth"
            value="{{ old('birthday') }}"/>

            @invalid(['field' => 'birthday']) @endinvalid
        </div>

        <div class="form-group">
            <label for="phone">Phone:</label>
            <input type="text" name="phone" id="phone"
            class="form-control form-control-sm"
            placeholder="Phone number"
            value="{{ old('phone') }}"/>

            @invalid(['field' => 'phone']) @endinvalid
        </div>

    @endif
</div>

<!-- The doctor -->
<div class="form-group">
    <label for="doctorId">The doctor: @asterisks @endasterisks</label>
    <select class="form-control" id="doctorId" read-only>
        <option>
            {{ Request::route('doctor')->full_name }}
        </option>
    </select>
</div>

<!-- The appointment date -->
<div class="form-group">
    <label for="appDate">Appointment date: @asterisks @endasterisks</label>
    <input type="text" name="app_date" id="appDate" class="form-control"
    placeholder="yyyy-mm-dd"
    value="{{ old('app_date') }}" />

    @invalid(['field' => 'app_date']) @endinvalid
</div>

<!-- The appointment time -->
<div class="form-group">
    <label for="appTime">Appointment time: @asterisks @endasterisks</label>
    <input type="text" name="app_time" id="appTime" class="form-control"
    placeholder="hh:mm"
    value="{{ old('app_time') }}" />

    @invalid(['field' => 'app_time']) @endinvalid
</div>
