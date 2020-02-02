<ul class="nav nav-tabs" role="tablist">
    @adminTabNav(['title' => 'credentials', 'activeHome' => true]) Credentials & Experience
    @endadminTabNav

    @adminTabNav(['title' => 'education']) Education & Training
    @endadminTabNav

    @adminTabNav(['title' => 'titles']) Titles & Affiliations
    @endadminTabNav

    @adminTabNav(['title' => 'contact']) Contact
    @endadminTabNav

    @adminTabNav(['title' => 'patients', 'activePatients' => true]) Patients
    @endadminTabNav
</ul>

<div class="tab-content">
    @adminTabPane(['title'=>'credentials', 'activeHome' => true])
        @include('partials.doctors.details._credentials')
    @endadminTabPane

    @adminTabPane(['title'=>'education'])
        @include('partials.doctors.details._education')
    @endadminTabPane

    @adminTabPane(['title'=>'titles'])
        @include('partials.doctors.details._titles')
    @endadminTabPane

    @adminTabPane(['title'=>'contact'])
        @include('partials.doctors.details._contact')
    @endadminTabPane

    @adminTabPane(['title'=>'patients', 'activePatients' => true])
        @datatable(['records' => 'Patients', 'route' => route('admin.doctors.patients.create', $doctor),
        'tab_pane' => true])
            <th>Id</th>
            <th>Name</th>
            <th>Birth Date</th>
            <th>MRN</th>
            <th>Doctor</th>
        @enddatatable
    @endadminTabPane
</div>