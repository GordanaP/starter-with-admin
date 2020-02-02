<div class="media">
    <div class="media-body">
        <table class="table admin-tabs-table">
            <tbody>
                <tr>
                    <td class="w-1/3 text-gray-700">Name</td>
                    <td class="text-gray-600">
                        {{ $patient->full_name}}
                    </td>
                </tr>
                <tr>
                    <td class="w-1/3 text-gray-700">Date of birth</td>
                    <td class="text-gray-600">
                        {{ $patient->birthday}}
                    </td>
                </tr>
                <tr>
                    <td class="w-1/3 text-gray-700">Address</td>
                    <td class="text-gray-600">
                        {{ $patient->full_address}}
                    </td>
                </tr>
                <tr>
                    <td class="w-1/3 text-gray-700">Phone</td>
                    <td class="text-gray-600">
                        {{ $patient->phone}}
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

    <div class="flex flex-col items-center">
        <img class="rounded-full w-1/2 mx-auto mb-3" src="{{ $patient->doctor->getImage() }}"
        alt="Doctor image">
        <a href="{{ route('admin.doctors.show', $patient->doctor) }}"
        class="a-primary mx-auto mb-2 font-weight-bold">
            Dr {{ $patient->doctor->full_name }}
        </a>
        <a href="#" style="color: #718096;">
            <i class="fa fa-calendar fa-lg"></i>
        </a>
    </div>
</div>