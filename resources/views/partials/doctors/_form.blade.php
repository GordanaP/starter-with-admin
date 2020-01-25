@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha256-siyOpF/pBWUPgIcQi17TLBkjvNgNQArcmwJB8YvkAgg=" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('css/custom_select2.css') }}">
@endsection

<form action="{{ $route ?? null }}" method="POST" class="forms-sample" enctype="multipart/form-data">

    @requiredFields @endrequiredFields

    @csrf

    @if (Request::route('doctor'))
        @method('PUT')
    @endif

    <!-- First Name -->
    <div class="form-group">
        <label for="first_name">First name: @asterisks @endasterisks</label>
        <input type="text" name="first_name" id="first_name"
        class="form-control form-control-sm"
        placeholder="First name"
        value="{{ old('first_name', optional($doctor ?? '')->first_name) }}" />

        @invalid(['field' => 'first_name']) @endinvalid
    </div>

    <!-- last Name -->
    <div class="form-group">
        <label for="last_name">Last name: @asterisks @endasterisks</label>
        <input type="text" name="last_name" id="last_name"
        class="form-control form-control-sm"
        placeholder="Last name"
        value="{{ old('last_name', optional($doctor ?? '')->last_name)  }}" />

        @invalid(['field' => 'last_name']) @endinvalid
    </div>

    <!-- Graduation  -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="graduation">Graduated from: @asterisks @endasterisks</label>
                <input type="text" name="graduation" id="graduation"
                class="form-control form-control-sm"
                placeholder="Medical school name"
                value="{{ old('graduation', optional($doctor ?? '')->graduation)  }}" />

                @invalid(['field' => 'graduation']) @endinvalid
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="graduation_year">Year of Graduation: @asterisks @endasterisks</label>
                <input type="text" name="graduation_year" id="graduation_year"
                class="form-control form-control-sm"
                placeholder="Year of graduation"
                value="{{ old('graduation_year', optional($doctor ?? '')->graduation_year) }}" />

                @invalid(['field' => 'graduation_year']) @endinvalid
            </div>
        </div>
    </div>

    <!-- Board Certification -->
    <div class="row">
        <div class="col-md-6">
            <div class="form-group">
                <label for="board_certification">Board Certification:</label>
                <input type="text" name="board_certification" id="board_certification"
                class="form-control form-control-sm"
                placeholder="Board certification field"
                value="{{ old('board_certification', $doctor->board_certification ?? null) }}" />

                @invalid(['field' => 'board_certification']) @endinvalid
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="certification_year">Year of certification:</label>
                <input type="text" name="certification_year" id="certification_year"
                class="form-control form-control-sm"
                placeholder="Year of certification"
                value="{{ old('certification_year', $doctor->certification_year ?? null) }}" />

                @invalid(['field' => 'certification_year']) @endinvalid
            </div>
        </div>
    </div>

    <!-- Training -->
    <div class="form-group">
        <label for="training">Training:</label>
        <textarea name="training" id="training"
        class="form-control form-control-sm" rows="3" maxlength="1000"
        placeholder="Training">{{ old('training', $doctor->training ?? null) }}</textarea>

        @invalid(['field' => 'training']) @endinvalid
    </div>

    <!-- Expertise -->
    <div class="form-group">
        <label for="expertise_id">Expertise:</label>
        <select class="js-example-basic-multiple w-full" multiple="multiple"
        name="expertise_id[]" id="expertise_id">
            @foreach ($expertises as $expertise)
                <option value="{{ $expertise->id }}"
                    @if ($ids = old('expertise_id', isset($doctor) ? $doctor->expertises->pluck('id') : null))
                        @foreach ($ids as $expertise_id)
                            {{ select($expertise->id, $expertise_id) }}
                        @endforeach
                    @endif
                >
                    {{ $expertise->field }}
                </option>
            @endforeach
        </select>

        @invalid(['field' => 'expertise_id']) @endinvalid
    </div>

    <!-- Academic title & affiliation -->
    <div class="form-group">
        <label for="academic_title">Academic title:</label>
        <input type="text" name="academic_title" id="academic_title"
        class="form-control form-control-sm"
        placeholder="Academic title"
        value="{{ old('academic_title', $doctor->academic_title ?? null) }}" />

        @invalid(['field' => 'academic_title']) @endinvalid
    </div>
    <div class="form-group">
        <label for="academic_affiliation">Academic affiliation:</label>
        <textarea name="academic_affiliation" id="academic_affiliation"
        class="form-control form-control-sm" rows="3"  maxlength="500"
        placeholder="Academic affiliation">{{ old('academic_affiliation', $doctor->academic_affiliation ?? null) }}</textarea>

        @invalid(['field' => 'academic_affiliation']) @endinvalid
    </div>

    <!-- Hospital affiliation -->
    <div class="form-group">
        <label for="hospital_affiliation">Hospital affiliation:</label>
        <textarea name="hospital_affiliation" id="hospital_affiliation"
        class="form-control form-control-sm" rows="3"  maxlength="500"
        placeholder="Hospital affiliation">{{ old('hospital_affiliation', $doctor->hospital_affiliation ?? null) }}</textarea>

        @invalid(['field' => 'hospital_affiliation']) @endinvalid
    </div>

    <!-- Administrative position -->
    <div class="form-group">
        <label for="administrative_position">Administrative position:</label>
        <textarea name="administrative_position" id="administrative_position"
        class="form-control form-control-sm" rows="3" maxlength="300"
        placeholder="Administrative position">{{ old('administrative_position', $doctor->administrative_position ?? null) }}</textarea>

        @invalid(['field' => 'administrative_position']) @endinvalid
    </div>

    <!-- Image -->
    @if (Request::route('doctor'))
        @include('partials.doctors._upload_image', [
            'doctor' => $doctor
        ])
    @else
        <div class="form-group">
            <label for="image" class="text-sm">Upload image:</label>
            @uploadFile(['name' => 'image']) @enduploadFile
        </div>
    @endif

    <!-- Submit -->
    <button type="submit" class="btn btn-gradient-primary mr-2 mt-2">
        Submit
    </button>
    {{-- <button class="btn btn-light">Cancel</button> --}}
</form>

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/file-upload.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/bootstrap-maxlength/bootstrap-maxlength.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha256-bqVeqGdJ7h/lYPq6xrPv/YGzMEb6dNxlfiTUHSgRCp8=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/custom_select2.js') }}"></script>
    <script src="{{ asset('js/custom_datepicker.js') }}"></script>
    <script src="{{ asset('js/custom_validation.js') }}"></script>
    <script src="{{ asset('js/form_helpers.js') }}"></script>

    <script>
        maxLength('#training, #academic_affiliation, #hospital_affiliation, #administrative_position ');

    </script>
@endsection
