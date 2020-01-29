<div
    class="tab-pane fade
        @if (isset($activeHome) == true && ! request('patients'))
            show active
        @endif

        @if (isset($activePatients) == true && request('patients'))
            show active
        @endif
    "
    id="{{ $title }}-1"
    role="tabpanel"
    aria-labelledby="{{ $title }}-tab"
>

        {{ $slot }}
</div>