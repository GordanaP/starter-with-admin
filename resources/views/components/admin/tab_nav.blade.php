<li class="nav-item">
    <a class="nav-link
        @if (isset($activeHome) == true && ! request('patients') && ! request('schedule')))
            active
        @endif

        @if (isset($activePatients) == true && request('patients'))
            active
        @endif

        @if (isset($activeSchedule) == true && request('schedule'))
            active
        @endif
    "
    id="{{ $title }}-tab" data-toggle="tab"
    href="#{{ $title }}-1" role="tab" aria-controls="{{ $title }}"
    aria-selected="true">

        <span class="text-gray-600">{{ $slot }}</span>

    </a>
</li>