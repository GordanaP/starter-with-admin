@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Home page</h4>

            {{-- <select class="form-control" id="selectDoctor">
                <option value="">Select a doctor</option>
                @foreach (\App\Doctor::all() as $doctor)
                    <option value="{{ $doctor->id }}">
                        {{ $doctor->full_name }}
                    </option>
                @endforeach
            </select> --}}
        </div>
    </div>
@endsection

@section('scripts')
    <script type="text/javascript">
        $(document).on('change', '#selectDoctor', function(){
            var selectedDoctor = getSelectedValue($(this));
            assignValueToEl('#newAppButton', selectedDoctor);
        });

        $(document).on('click', '#newAppButton', function(){
            var selectedDoctor = $(this).val();
            var createEventUrl = '/admin/doctors/' + selectedDoctor + '/appointments/create';

            goTo(createEventUrl);
        });

        function goTo(url)
        {
            location.replace(url);
        }

        function getSelectedValue(selectbox)
        {
            return selectbox.children("option:selected").val();
        }

        function assignValueToEl(el, value)
        {
            $(el).val(value);
        }
    </script>
@endsection