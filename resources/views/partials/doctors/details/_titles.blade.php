<div class="media">
    <div class="media-body">
        <table class="table admin-tabs-table">
            <tbody>
                <tr>
                   <td>Academic credentials</td>
                    <td class="text-muted">
                        @if ($doctor->academic_title )
                            {{ $doctor->academic_title}} at {{ $doctor->academic_affiliation }}
                        @else
                            n/a
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Hospital affiliation</td>
                    <td class="text-muted">{{ $doctor->hospital_affiliation ?? 'Small Clinic' }}</td>
                </tr>
                <tr>
                    <td>Administrative position</td>
                    <td class="text-muted">{{ $doctor->administrative_position ?? 'n/a' }}</td>
                </tr>
                <tr>
                    <td>Joined</td>
                    <td class="text-muted">{{ $doctor->created_at }}</td>
                </tr>
                <tr>
                    <td>Last update</td>
                    <td class="text-muted">{{ $doctor->updated_at }}</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>