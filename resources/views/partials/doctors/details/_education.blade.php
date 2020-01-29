<div class="media">
    <div class="media-body">
        <table class="table admin-tabs-table">
            <tbody>
                <tr>
                    <td class="w-1/5 text-gray-700">Medical degree</td>
                    <td class="text-muted">
                        {{ $doctor->graduation }} {{ $doctor->graduation_year }}
                    </td>
                </tr>
                <tr>
                    <td class="w-1/5 text-gray-700">Residency</td>
                    <td class="text-muted">
                        n/a
                    </td>
                </tr>
                <tr>
                    <td class="w-1/5 text-gray-700">Training</td>
                    <td class="text-muted">
                        {{ \Illuminate\Mail\Markdown::parse($doctor->training) }}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>