<div class="media">
    <img class="mr-3 w-25 rounded" src="{{ $doctor->getImage() }}"
    alt="Doctor image">
    <div class="media-body">
        <table class="table admin-tabs-table ml-10">
            <tbody>
                <tr>
                    <td class="w-1/3 text-gray-700">Board certification</td>
                    <td class="text-gray-600">
                        {{ $doctor->board_certification ?? 'n/a'}}
                        {{ $doctor->certification_year ?? ''}}
                    </td>
                </tr>
                <tr>
                    <td class="text-gray-700">Specialties</td>
                    <td>
                        <ul class="list-ticked mb-0">
                            @forelse ($doctor->expertises as $expertise)
                                <li>
                                    <a href="#" class="a-primary">
                                        {{ $expertise->field }}
                                    </a>
                                </li>
                            @empty
                                n/a
                            @endforelse
                        </ul>
                    </td>
                </tr>
                <tr>
                    <td class="text-gray-700">Clinical expertise</td>
                    <td class="text-gray-600">Clinical expertise</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>