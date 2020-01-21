@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">
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
    </div>

    <!-- last Name -->
    <div class="form-group">
        <label for="last_name">Last name: @asterisks @endasterisks</label>
        <input type="text" name="last_name" id="last_name"
        class="form-control form-control-sm"
        placeholder="Last name"
        value="{{ old('last_name', optional($doctor ?? '')->last_name)  }}" />
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
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="graduation_year">Year of Graduation: @asterisks @endasterisks</label>
                <input type="text" name="graduation_year" id="graduation_year"
                class="form-control form-control-sm"
                placeholder="Year of graduation"
                value="{{ old('graduation_year', optional($doctor ?? '')->graduation_year) }}" />
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
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label for="certification_year">Year of certification:</label>
                <input type="text" name="certification_year" id="certification_year"
                class="form-control form-control-sm"
                placeholder="Year of certification"
                value="{{ old('certification_year', $doctor->certification_year ?? null) }}" />
            </div>
        </div>
    </div>

    <!-- Training -->
    <div class="form-group">
        <label for="training">Training:</label>
        <textarea name="training" id="training"
        class="form-control form-control-sm" rows="3"
        placeholder="Training"
        value="{{ old('training', $doctor->training ?? null) }}" ></textarea>
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
    </div>

    <!-- Academic title & affiliation -->
    <div class="form-group">
        <label for="academic_title">Academic title:</label>
        <input type="text" name="academic_title" id="academic_title"
        class="form-control form-control-sm"
        placeholder="Academic title"
        value="{{ old('academic_title', $doctor->academic_title ?? null) }}" />
    </div>
    <div class="form-group">
        <label for="academic_affiliation">Academic affiliation:</label>
        <textarea name="academic_affiliation" id="academic_affiliation"
        class="form-control form-control-sm" rows="3"
        placeholder="Academic affiliation"
        value="{{ old('academic_affiliation', $doctor->academic_affiliation ?? null) }}"></textarea>
    </div>

    <!-- Hospital affiliation -->
    <div class="form-group">
        <label for="hospital_affiliation">Hospital affiliation:</label>
        <textarea name="hospital_affiliation" id="hospital_affiliation"
        class="form-control form-control-sm" rows="3"
        placeholder="Hospital affiliation"
        value="{{ old('hospital_affiliation', $doctor->hospital_affiliation ?? null) }}"></textarea>
    </div>

    <!-- Administrative position -->
    <div class="form-group">
        <label for="administrative_position">Administrative position:</label>
        <textarea name="administrative_position" id="administrative_position"
        class="form-control form-control-sm" rows="3"
        placeholder="Administrative position"
        value="{{ old('administrative_position', $doctor->administrative_position ?? null) }}"></textarea>
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
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/select2.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/file-upload.js') }}"></script>
    <script src="{{ asset('js/custom_select2.js') }}"></script>
@endsection
