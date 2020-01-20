@extends('layouts.admin.app_dashboard')

@section('title', 'New Doctor')

@section('links')
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/select2/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/purple-admin-pro/assets/vendors/select2-bootstrap-theme/select2-bootstrap.min.css') }}">

    <style>
        .select2-selection.select2-selection--multiple {
            height: 42px !important; overflow: hidden !important; padding-top: 4px !important;
            padding-left: 6px !important}
    </style>
@endsection

@section('content')
    @adminPageHeader(['title' => 'Doctors', 'item' => 'Doctors', 'subtitle' => "Add new"])
    @endadminPageHeader

    <div class="card px-4">
        <div class="card-body">

            @requiredFields
            @endrequiredFields

            <form action="{{ route('admin.doctors.store') }}" method="POST"
            class="forms-sample" enctype="multipart/form-data">

                @csrf

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

                <!-- Graduation  -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="graduation">Graduated from: @asterisks @endasterisks</label>
                            <input type="text" name="graduation" id="graduation"
                            class="form-control form-control-sm"
                            placeholder="Medical school name" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="graduation_year">Year of Graduation: @asterisks @endasterisks</label>
                            <input type="text" name="graduation_year" id="graduation_year"
                            class="form-control form-control-sm"
                            placeholder="Year of graduation" />
                        </div>
                    </div>
                </div>

                <!-- Training -->
                <div class="form-group">
                    <label for="training">Training:</label>
                    <textarea name="training" id="training"
                    class="form-control form-control-sm" rows="3"
                    placeholder="Training"></textarea>
                </div>

                <!-- Board Certification -->
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="board_certification">Board Certification:</label>
                            <input type="text" name="board_certification" id="board_certification"
                            class="form-control form-control-sm"
                            placeholder="Board certification field" />
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="certification_year">Year of certification:</label>
                            <input type="text" name="certification_year" id="certification_year"
                            class="form-control form-control-sm"
                            placeholder="Year of certification" />
                        </div>
                    </div>
                </div>

                <!-- Expertise -->
                <div class="form-group">
                    <label for="expertise_id">Expertise:</label>
                    <select class="js-example-basic-multiple w-full" multiple="multiple"
                    name="expertise_id[]" id="expertise_id">
                        @foreach ($expertises as $expertise)
                            <option value="{{ $expertise->id }}">
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
                    placeholder="Academic title" />
                </div>
                <div class="form-group">
                    <label for="academic_affiliation">Academic affiliation:</label>
                    <textarea name="academic_affiliation" id="academic_affiliation"
                    class="form-control form-control-sm" rows="3"
                    placeholder="Academic affiliation"></textarea>
                </div>

                <!-- Hospital affiliation -->
                <div class="form-group">
                    <label for="hospital_affiliation">Hospital affiliation:</label>
                    <textarea name="hospital_affiliation" id="hospital_affiliation"
                    class="form-control form-control-sm" rows="3"
                    placeholder="Hospital affiliation"></textarea>
                </div>

                <!-- Administrative position -->
                <div class="form-group">
                    <label for="administrative_position">Administrative position:</label>
                    <textarea name="administrative_position" id="administrative_position"
                    class="form-control form-control-sm" rows="3"
                    placeholder="Administrative position"></textarea>
                </div>

                <!-- Image -->
                <div class="form-group">
                    <label>Image upload:</label>
                    <input type="file" name="image" id="image" class="file-upload-default">
                    <div class="input-group col-xs-12">
                        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                        <span class="input-group-append">
                            <button class="file-upload-browse btn btn-gradient-primary" type="button">Upload</button>
                        </span>
                    </div>
                </div>

                <!-- Submit -->
                <button type="submit" class="btn btn-gradient-primary mr-2">
                    Submit
                </button>
                {{-- <button class="btn btn-light">Cancel</button> --}}
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('vendor/purple-admin-pro/assets/vendors/select2/select2.min.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/select2.js') }}"></script>
    <script src="{{ asset('vendor/purple-admin-pro/assets/js/file-upload.js') }}"></script>

    <script type="text/javascript">
        var select2 = $(".js-example-basic-multiple").select2({
            placeholder: "Select a field of expertise",
            allowClear: true,
        });

    </script>
@endsection
