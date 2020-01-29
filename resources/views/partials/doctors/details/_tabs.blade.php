<ul class="nav nav-tabs" role="tablist">
    @adminTabNav(['title' => 'credentials']) Credentials & Experience
    @endadminTabNav

    @adminTabNav(['title' => 'education']) Education & Training
    @endadminTabNav

    @adminTabNav(['title' => 'titles']) Titles & Affiliations
    @endadminTabNav

    @adminTabNav(['title' => 'contact']) Contact
    @endadminTabNav

    @adminTabNav(['title' => 'patients']) Patients
    @endadminTabNav
</ul>

<div class="tab-content">
    @adminTabPane(['title'=>'credentials'])
        @include('partials.doctors.details._credentials', ['doctor' => $doctor])
    @endadminTabPane

    @adminTabPane(['title'=>'education'])
        @include('partials.doctors.details._education', ['doctor' => $doctor])
    @endadminTabPane

    @adminTabPane(['title'=>'titles'])
        @include('partials.doctors.details._titles', ['doctor' => $doctor])
    @endadminTabPane

    @adminTabPane(['title'=>'contact'])
        @include('partials.doctors.details._contact', ['doctor' => $doctor])
    @endadminTabPane

    @adminTabPane(['title'=>'patients'])
        @datatable(['records' => 'Patients', 'tab_pane' => true])
            <th>Id</th>
            <th>Name</th>
            <th>Birth Date</th>
            <th>MRN</th>
            <th>Doctor</th>
        @enddatatable
    @endadminTabPane
</div>