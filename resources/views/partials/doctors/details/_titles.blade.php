<div class="media">
    <div class="media-body">
        <table class="table admin-tabs-table">
            <tbody>
                <tr>
                   <td class="w-1/4 text-gray-700">Academic credentials</td>
                    <td class="text-muted">
                        @if ($doctor->academic_title )
                            {{ $doctor->academic_title}} at {{ $doctor->academic_affiliation }}
                        @else
                            n/a
                        @endif
                    </td>
                </tr>
                <tr>
                    <td class="w-1/5 text-gray-700">Hospital affiliation</td>
                    <td class="text-muted">{{ $doctor->hospital_affiliation ?? 'Small Clinic' }}</td>
                </tr>
                <tr>
                    <td class="w-1/5 text-gray-700">Administrative position</td>
                    <td class="text-muted">{{ $doctor->administrative_position ?? 'n/a' }}</td>
                </tr>
                <tr>
                    <td class="w-1/5 text-gray-700">Joined</td>
                    <td class="text-muted">{{ $doctor->created_at }}</td>
                </tr>
                <tr>
                    <td class="w-1/5 text-gray-700">Last update</td>
                    <td class="text-muted">{{ $doctor->updated_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>