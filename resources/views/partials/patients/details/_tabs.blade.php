<ul class="nav nav-tabs" role="tablist">
    @adminTabNav(['title' => 'personal', 'activeHome' => true]) Personal information
    @endadminTabNav

    @adminTabNav(['title' => 'medical_history']) Medical history
    @endadminTabNav
</ul>

<div class="tab-content">
    @adminTabPane(['title'=>'personal', 'activeHome' => true])
        @include('partials.patients.details._personal')
    @endadminTabPane

    @adminTabPane(['title'=>'medical_history'])
    @endadminTabPane
</div>