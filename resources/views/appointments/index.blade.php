@extends('layouts.admin.app_dashboard')

@section('title', 'Appointments')

@section('links')
    <link href="{{ asset('vendor/fullcalendar-4.3.1/packages/core/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('vendor/fullcalendar-4.3.1/packages/daygrid/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('vendor/fullcalendar-4.3.1/packages/timegrid/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('vendor/fullcalendar-4.3.1/packages/list/main.css') }}" rel='stylesheet' />
@endsection

@section('content')
    @adminPageHeader(['title' => 'Appointments', 'subtitle' => 'All'])
    @endadminPageHeader

    <div class="card">
        <div class="card-body">
            <div id="calendar"></div>
        </div>
    </div>

    <!-- Modal starts -->
    <div class="modal fade" id="newEventModal" tabindex="-1" role="dialog"
    aria-labelledby="newEventModal" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Select a patient</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="radio" class="form-check-input"
                            name="patient_type" id="oldPatient" value="old" checked>
                            Old patient
                        </label>
                    </div>
                    <div class="form-check">
                      <label class="form-check-label">
                            <input type="radio" class="form-check-input"
                            name="patient_type" id="newPatient" value="new">
                            New patient
                        </label>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" id="newAppButton">Submit</button>
                    <button type="button" class="btn btn-light" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Ends -->
@endsection

@section('scripts')
    <script src="{{ asset('vendor/fullcalendar-4.3.1/packages/core/main.js') }}"></script>
    <script src="{{ asset('vendor/fullcalendar-4.3.1/packages/interaction/main.js') }}"></script>
    <script src="{{ asset('vendor/fullcalendar-4.3.1/packages/daygrid/main.js') }}"></script>
    <script src="{{ asset('vendor/fullcalendar-4.3.1/packages/timegrid/main.js') }}"></script>
    <script src="{{ asset('vendor/fullcalendar-4.3.1/packages/list/main.js') }}"></script>

    <script>

        /**
         * Calendar
         */
        document.addEventListener('DOMContentLoaded', function() {

            var calendarEl = document.getElementById('calendar');
            var firstDay = 1;
            var defaultView = 'dayGridMonth';
            var standardDays = [1,2,3,4,5];
            var standardOpen = '09:00';
            var standardClose = '20:00';
            var saturday = [6];
            var saturdayOpen = '10:00';
            var saturdayClose = '15:00';
            var eventsListUrl = "{{ route('admin.appointments.list') }}";
            var eventLimit = 6;
            var newEventModal = $('#newEventModal');

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: ' myCustomButton dayGridMonth,timeGridWeek,timeGridDay,listDay'
                },
                navLinks: true,
                customButtons: {
                    myCustomButton: {
                        text: 'New appointment',
                        click: function() {
                            newEventModal.modal('show');
                        }
                    }
                  },
                defaultView: defaultView,
                firstDay: firstDay,
                minTime: standardOpen,
                maxTime: standardClose,
                businessHours: [ // specify an array instead
                    {
                        daysOfWeek: standardDays, // Monday, Tuesday, Wednesday
                        startTime: standardOpen, // 8am
                        endTime: standardClose // 6pm
                    },
                    {
                        daysOfWeek: saturday, // Thursday, Friday
                        startTime: saturdayOpen, // 10am
                        endTime: saturdayClose // 4pm
                    }
                ],
                slotLabelFormat: [
                    {
                        hour: 'numeric',
                        minute: '2-digit',
                        hour12: false
                    }
                ],
                editable: true,
                events:  {
                    url: eventsListUrl,
                },
                eventDataTransform: function(event) {
                    event.title = event.patient.short_name + ' - ' + event.doctor.last_name;
                    event.description = event.doctor.last_name;
                    event.start = event.start_at;
                    event.end = event.end_at;
                    event.backgroundColor = event.doctor.color;
                    event.borderColor = event.doctor.color;
                    event.groupId = event.doctor.id;

                    return event;
                },
                eventRender: function(info) {
                  $(info.el).tooltip({
                    title: info.event.extendedProps.description,
                    placement: "top",
                    trigger: "hover",
                    container: "body"
                  });
                },
                eventTimeFormat: {
                    hour: 'numeric',
                    minute: '2-digit',
                    meridiem: false,
                    hour12: false
                },
                eventLimit: eventLimit,
            });

            calendar.render();
        });

        $(document).on('click', "#newAppButton", function(){
            var radioValue = $("input[name='patient_type']:checked").val();
            if(radioValue == 'old'){
                var url = "{{ route('admin.patients.index') }}";
            } else if(radioValue == 'new') {
                var url = "{{ route('admin.doctors.index') }}"
            }
            redirectTo(url);
        });

        function redirectTo(url)
        {
            location.replace(url);
        }

    </script>
@endsection
