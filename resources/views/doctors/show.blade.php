@extends('layouts.admin.app_dashboard')

@section('title', 'Show Doctor')

@section('links')
    @include('partials.datatables._links')

    <style>
        .admin-table tr td { border: none }
    </style>
@endsection

@section('content')
    @adminPageHeader(['title' => $doctor->full_name, 'item' => 'Doctors', 'subtitle' => "Show"])
    @endadminPageHeader

    <div class="card">
        <div class="card-body">
            <h6 class="text-primary font-weight-bold text-uppercase tracking-wider">
                {{ $doctor->full_name }}

                <div class="row pull-right mb-4">
                    <div class="btn-group" role="group" aria-label="Basic example">
                        <form action="{{ route('admin.doctors.destroy', $doctor) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-inverse-dark">
                                <i class="mdi mdi-delete"></i>
                            </button>
                        </form>
                        <a href="{{ route('admin.doctors.edit', $doctor) }}" class="btn btn-warning">
                            <i class="mdi mdi-file-check"></i>
                        </a>
                    </div>
                </div>
            </h6>
            <p class="card-description">Ophtalmology Resident</p>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" id="home-tab" data-toggle="tab"
                    href="#home-1" role="tab" aria-controls="home"
                    aria-selected="true">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="profile-tab" data-toggle="tab"
                    href="#profile-1" role="tab" aria-controls="profile"
                    aria-selected="false">Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="contact-tab" data-toggle="tab"
                    href="#contact-1" role="tab" aria-controls="contact"
                    aria-selected="false">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="patients-tab" data-toggle="tab"
                    href="#patients-1" role="tab" aria-controls="patients"
                    aria-selected="false">Patients</a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade show active" id="home-1"
                role="tabpanel" aria-labelledby="home-tab">
                    <div class="media">
                        <img class="mr-3 w-25 rounded" src="{{ $doctor->getImage() }}"
                        alt="Doctor image">
                        <div class="media-body">
                            <table class="table admin-table ml-10">
                                <tbody>
                                    <tr>
                                        <td class="w-1/3">Board certification</td>
                                        <td>
                                            {{ $doctor->board_certification ?? 'n/a'}}
                                            {{ $doctor->certification_year ?? ''}}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Expertise</td>
                                        <td  class="text-primary">
                                            <ul class="list-ticked mb-0">
                                                @foreach ($doctor->expertises as $expertise)
                                                    <li>
                                                        <a href="#">
                                                            {{ $expertise->field }}
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                       <td>Academic credentials</td>
                                        <td>
                                            <p>{{ $doctor->academic_title ?? 'n/a' }}</p>
                                            <p>{{ $doctor->academic_affiliation }}</p>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Hospital affiliation</td>
                                        <td>{{ $doctor->hospital_affiliation ?? 'Small Clinic' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Administrative position</td>
                                        <td>{{ $doctor->administrative_position ?? 'n/a' }}</td>
                                    </tr>
                                    <tr>
                                        <td>Graduation</td>
                                        <td class="text-muted">
                                            {{ $doctor->graduation }},
                                            {{ $doctor->graduation_year }}
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Joined</td>
                                        <td>{{ $doctor->created_at }}</td>
                                    </tr>
                                    <tr>
                                        <td>Last update</td>
                                        <td>{{ $doctor->updated_at }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="profile-1" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="media">
                        <img class="mr-3 w-25 rounded" src="{{ asset('vendor/purple-admin-pro/assets/images/faces/face12.jpg') }}" alt="sample image">
                        <div class="media-body">
                            <h4 class="mt-0">John Doe</h4>
                            <p> Fail most room even gone her end like. Comparison dissimilar unpleasant six compliment two unpleasing any add. Ashamed my company thought wishing colonel it prevent he in. Pretended residence are something far engrossed old off. </p>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="contact-1" role="tabpanel" aria-labelledby="contact-tab">
                    <h4>Contact us </h4>
                    <p> Feel free to contact us if you have any questions! </p>
                    <p>
                      <i class="mdi mdi-phone text-info"></i> +123456789
                    </p>
                    <p>
                      <i class="mdi mdi-email-outline text-success"></i> contactus@example.com
                    </p>
                </div>
                <div class="tab-pane fade" id="patients-1" role="tabpanel" aria-labelledby="patients-tab">
                    @datatable(['records' => 'Patients'])
                        <th>Id</th>
                        <th>Name</th>
                        <th>Birth Date</th>
                        <th>Medical Record</th>
                        <th>Doctor</th>
                    @enddatatable
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    @include('partials.datatables._scripts')

    <script src="{{ asset('vendor/purple-admin-pro/assets/js/tabs.js') }}"></script>

    <script>

        var records = 'Patients';
        var parent = 'doctors';
        var parentId = "{{ $doctor->id }}";

        @include('partials.patients._datatable')

        @include('partials.datatables._delete_records')

    </script>
@endsection