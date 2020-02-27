@extends('layouts.admin.app_dashboard')

@section('title', 'New appointment')

@section('links')
    <link href="{{ asset('vendor/fullcalendar-4.3.1/packages/core/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('vendor/fullcalendar-4.3.1/packages/daygrid/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('vendor/fullcalendar-4.3.1/packages/timegrid/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('vendor/fullcalendar-4.3.1/packages/list/main.css') }}" rel='stylesheet' />

    <style type="text/css">
        .holiday { background-color: coral; }
    </style>
@endsection

@section('content')
    @adminPageHeader(['title' => 'New appointment', 'item' => 'Appointments',
        'subtitle' => 'Create', 'route' => route('admin.appointments.index')
    ])
    @endadminPageHeader

    <div class="card">
        <div class="card-body">
            <div id="calendar"></div>
        </div>
    </div>

    <!-- Modal -->
    @include('partials.appointments._schedule_modal', [
        'doctor' => $doctor ?? null,
        'patient' => $patient ?? null,
    ])
@endsection

@section('scripts')
    <!-- Moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.28/moment-timezone.min.js"></script>
    <!-- Moment plugin to calculate dates for weekdays -->
    <script src="https://cdn.jsdelivr.net/npm/moment-weekdaysin@1.0.1/moment-weekdaysin.min.js"></script>
    <!-- Moment plugin to make date range -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-range/4.0.2/moment-range.js" integrity="sha256-bB6c2ZfNzG6Tv8MSu/pqUl0y91h86M/T+1w0WrCZhGw=" crossorigin="anonymous"></script>

    <!-- FullCalendar -->
    <script src="{{ asset('vendor/fullcalendar-4.3.1/packages/core/main.js') }}"></script>
    <script src="{{ asset('vendor/fullcalendar-4.3.1/packages/interaction/main.js') }}"></script>
    <script src="{{ asset('vendor/fullcalendar-4.3.1/packages/daygrid/main.js') }}"></script>
    <script src="{{ asset('vendor/fullcalendar-4.3.1/packages/timegrid/main.js') }}"></script>
    <script src="{{ asset('vendor/fullcalendar-4.3.1/packages/list/main.js') }}"></script>

    <!-- Custom fullcalendar -->
    <script src="{{ asset('js/fullcalendar.js') }}"></script>
    <script src="{{ asset('js/modal_helpers.js') }}"></script>

    <script>
        /**
         * Shedule App Form
         */
        var doctorId = $('#doctorId');
        var patientId = $('#patientId');
        var appDate = $('#appDate');
        var appTime = $('#appTime');
        var patientFirstName = $('#firstName');
        var patientLastName = $('#lastName');
        var patientBirthday = $('#birthday');
        var patientPhone = $('#phone');
        var appButton = $(".app-button");

        /**
         * Schedule app
         */
        var scheduleAppModal = $('#scheduleAppModal');
        var scheduleAppButton = $("#scheduleAppButton");
        var scheduleAppUrl = "{{ route('admin.doctors.appointments.store', $doctor) }}";

        scheduleAppModal.autofocus('#appDate');

        /**
         * Delete app
         */
        var deleteAppButton = $('#deleteAppButton').hide();

        /**
         * Calendar
         */
        document.addEventListener('DOMContentLoaded', function() {
            var calendarEl = document.getElementById('calendar');
            var firstWeekDay = 1;
            var defaultView = 'timeGridWeek';
            var dateFormat = 'YYYY-MM-DD';
            var timeFormat = 'HH:mm';
            var eventLimit = 6;
            var doctorOfficeDays = @json($doctor->business_days);
            var doctorAppSlotDuration = @json($doctor->app_slot);
            var formattedDoctorAppSlotDuration = formatDateString(doctorAppSlotDuration, 'mm', 'HH:mm:ss');
            var earliestBusinessOpen = @json(App::make('business-hour')->rangeExtremes()['open']);
            var latestBusinessClose = @json(App::make('business-hour')->rangeExtremes()['close']);
            var eventsListUrl = @json(route('admin.doctors.appointments.list', $doctor));

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'myCustomButton, dayGridMonth, timeGridWeek, timeGridDay, listDay'
                },
                navLinks: true,
                customButtons: {
                    myCustomButton: {
                        text: 'Schedule an appointment',
                        click: function() {
                            scheduleAppModal.open();
                        }
                    }
                },
                defaultView: defaultView,
                firstDay: firstWeekDay,
                minTime: earliestBusinessOpen,
                maxTime: latestBusinessClose,
                slotDuration: formattedDoctorAppSlotDuration,
                businessHours: doctorOfficeHours(doctorOfficeDays),
                slotLabelFormat: [
                    {
                        hour: 'numeric',
                        minute: '2-digit',
                        hour12: false
                    }
                ],
                dayRender: function(rendered) {
                    highlightHolidays(rendered, className="holiday")
                },
                events:  {
                    url: eventsListUrl,
                },
                eventDataTransform: function(eventData) {
                    transformToEventObj(eventData);
                },
                eventRender: function(rendered) {
                  $(rendered.el).tooltip({
                    title: rendered.event.extendedProps.description,
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
                selectable: true,
                select: function(selected) {
                    var date = selected.start;
                    var eventDate = formatDateObj(date, dateFormat);
                    var eventTime = formatDateObj(date, timeFormat);
                    var viewType = selected.view.viewSpec.type;

                    areSelectableDayAndTime(date, doctorOfficeDays, viewType)
                        ? scheduleAppModal.open() : '';

                    appDate.val(eventDate);
                    appTime.val(viewType == 'dayGridMonth' ? earliestBusinessOpen : eventTime);
                    appButton.text('Schedule').attr('id', 'scheduleAppButton');
                    deleteAppButton.hide();
                },
                eventClick: function(clicked) {
                    var event = clicked.event;
                    eventId = event.id;
                    eventDate = formatDateObj(event.start, dateFormat);
                    eventTime = formatDateObj(event.start, timeFormat);

                    scheduleAppModal.open();

                    appDate.val(eventDate);
                    appTime.val(eventTime);
                    appButton.text('Reschedule').attr('id', 'rescheduleAppButton').val(eventid);
                    deleteAppButton.show().val(eventid);
                },
                eventDrop: function(dropped) {
                    var event = dropped.event;
                    var eventid = event.id;
                    var eventDate = formatDateObj(event.start, dateFormat);
                    var eventTime = formatDateObj(event.start, timeFormat);
                    var patientId = event.extendedProps.patient.id;
                    var rescheduleAppUrl = '/admin/appointments/' + eventid;

                    var data = {
                        patient: patientId,
                        app_date: eventDate,
                        app_time: eventTime,
                    }

                    $.ajax({
                        url: rescheduleAppUrl,
                        type: 'PUT',
                        data: data,
                    })
                    .done(function(response) {
                        updateEvent(calendar, response.appointment);
                        scheduleAppModal.close();
                    })
                    .fail(function() {
                        console.log("error");
                    });
                },
                views: {
                    timeGrid: {
                        editable: true,
                    },
                }
            });

            calendar.render();

            // Add appointment
            $(document).on('click', '#scheduleAppButton', function() {

                var data = {
                    patient: patientId.val(),
                    app_date: appDate.val(),
                    app_time: appTime.val(),
                }

                $.ajax({
                    url: scheduleAppUrl,
                    type: 'POST',
                    data: data,
                })
                .done(function(response) {
                    addEvent(calendar, response.appointment);
                    scheduleAppModal.close();
                })
                .fail(function() {
                    console.log("error");
                });
            });

            // Update appointment
            $(document).on('click',  '#rescheduleAppButton', function(){
                var appId = $(this).val();
                var rescheduleAppUrl = '/admin/appointments/' + appId;

                var data = {
                    patient: patientId.val(),
                    app_date: appDate.val(),
                    app_time: appTime.val(),
                }

                $.ajax({
                    url: rescheduleAppUrl,
                    type: 'PUT',
                    data: data,
                })
                .done(function(response) {
                    updateEvent(calendar, response.appointment);
                    scheduleAppModal.close();
                })
                .fail(function() {
                    console.log("error");
                });
            });

            // Remove appointment
            $(document).on('click', '#deleteAppButton', function() {
                var appId = $(this).val();
                var deleteAppUrl = '/admin/appointments/' + appId;

                $.ajax({
                    url: deleteAppUrl,
                    type: 'DELETE',
                })
                .done(function(response) {
                    removeEvent(calendar, appId);
                    scheduleAppModal.close();
                })
                .fail(function() {
                    console.log("error");
                });
            });
        });
    </script>
@endsection