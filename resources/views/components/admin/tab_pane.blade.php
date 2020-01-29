<div class="tab-pane fade {{ request('patients') ? 'show active' : '' }}"
id="{{ $title }}-1" role="tabpanel" aria-labelledby="{{ $title }}-tab">

    {{ $slot }}

</div>