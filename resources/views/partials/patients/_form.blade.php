<form action="{{ $route ?? null }}" method="POST" class="forms-sample">

    @requiredFields @endrequiredFields

    @csrf

    @if (Request::route('patient'))
        @method('PUT')
    @endif

    <!-- First Name -->
    <div class="form-group">
        <label for="first_name">First name: @asterisks @endasterisks</label>
        <input type="text" name="first_name" id="first_name"
        class="form-control form-control-sm"
        placeholder="First name"
        value="{{ old('first_name', $patient->first_name ?? null) }}" />

        @invalid(['field' => 'first_name']) @endinvalid
    </div>

    <!-- last Name -->
    <div class="form-group">
        <label for="last_name">Last name: @asterisks @endasterisks</label>
        <input type="text" name="last_name" id="last_name"
        class="form-control form-control-sm"
        placeholder="Last name"
        value="{{ old('last_name', $patient->last_name ?? null)  }}" />

        @invalid(['field' => 'last_name']) @endinvalid
    </div>

    <!-- Birthday  -->
    <div class="form-group">
        <label for="birthday">Date of birth: @asterisks @endasterisks</label>
        <input type="text" name="birthday" id="birthday"
        class="form-control form-control-sm"
        placeholder="Date of birth"
        value="{{ old('birthday', $patient->birthday ?? null) }}" />

        @invalid(['field' => 'birthday']) @endinvalid
    </div>

    <!-- Street address -->
    <div class="form-group">
        <label for="street_address">Street address:</label>
        <input type="text" name="street_address" id="street_address"
        class="form-control form-control-sm"
        placeholder="Street address"
        value="{{ old('street_address', $patient->street_address ?? null) }}" />

        @invalid(['field' => 'street_address']) @endinvalid
    </div>

    <!-- City & Country -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="city">City:</label>
                <input type="text" name="city" id="city"
                class="form-control form-control-sm"
                placeholder="City"
                value="{{ old('city', $patient->city ?? null) }}" />

                @invalid(['field' => 'city']) @endinvalid
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="country">Country:</label>
                <select class="form-control form-control-sm"
                name="country" id="country">
                    <option value="">Select a country</option>
                    @foreach ($countries as $country => $country_code)
                        <option value="{{ $country_code }}"
                            {{ select($country_code, old('country', $patient->country ?? 'rs')) }}
                        >
                            {{ $country }}
                        </option>
                    @endforeach
                </select>

                @invalid(['field' => 'country']) @endinvalid
            </div>
        </div>
    </div>

    <!-- Phone number -->
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" id="phone"
        class="form-control form-control-sm"
        placeholder="Phone number"
        value="{{ old('phone', $patient->phone ?? null) }}" />

        @invalid(['field' => 'phone']) @endinvalid
    </div>

    <div class="form-group">
        <label for="doctor_id">Doctor:</label>
        <select class="form-control form-control-sm"
        name="doctor_id" id="doctor_id">
            <option value="">Select a doctor</option>
            @foreach ($doctors as $doctor)
                <option value="{{ $doctor->id }}"
                    {{ select($doctor->id, old('doctor_id', $patient->doctor_id ?? null)) }}
                >
                    {{ $doctor->full_name }}
                </option>
            @endforeach
        </select>

        @invalid(['field' => 'doctor_id']) @endinvalid
    </div>

    <!-- Submit -->
    <button type="submit" class="btn btn-gradient-primary mr-2 mt-2">
        Submit
    </button>
    {{-- <button class="btn btn-light">Cancel</button> --}}
</form>