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
                            scheduleAppModal.modal('show');
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
                dayRender: function(info) {
                    var year = info.date.getFullYear();
                    highlightHolidays(year);
                },
                events:  {
                    url: eventsListUrl,
                },
                eventDataTransform: function(eventData) {
                    transformToEventObj(eventData);
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
                selectable: true,
                select: function(info) {
                    var dateObj = info.start;
                    var viewObj = info.view.viewSpec.type;
                    var year = dateObj.getFullYear();
                    var formattedDate = formatDateObj(dateObj, dateFormat);
                    var formattedTime = formatDateObj(dateObj, timeFormat);

                    ( isNotHoliday(formattedDate, year) &&
                      isDoctorOfficeDay(doctorOfficeDays, dateObj) &&
                      isDoctorOfficeHour(doctorOfficeDays, dateObj) &&
                      isNotPast( dateObj) )
                    ? scheduleAppModal.modal('show') : '';

                    appDate.val(formattedDate);
                    appTime.val(viewObj == 'dayGridMonth' ? earliestBusinessOpen : formattedTime);
                    appButton.text('Schedule').attr('id', 'scheduleAppButton');
                    deleteAppButton.hide();

                },
                eventClick: function(info) {
                    var eventObj = info.event;

                    scheduleAppModal.modal('show');
                    appDate.val(formatDateObj(eventObj.start, dateFormat));
                    appTime.val(formatDateObj(eventObj.start, timeFormat));
                    appButton.text('Reschedule').attr('id', 'rescheduleAppButton').val(eventObj.id);
                    deleteAppButton.show().val(eventObj.id);
                },
                eventDrop: function(info)
                {
                    var dropped = info.event;
                    var patientId = dropped.extendedProps.patient.id;
                    var droppedDate = formatDateObj(dropped.start, dateFormat);
                    var droppedTime = formatDateObj(dropped.start, timeFormat);
                    var appId = dropped.id;
                    var rescheduleAppUrl = '/admin/appointments/' + appId;

                    var data = {
                        patient: patientId,
                        app_date: droppedDate,
                        app_time: droppedTime,
                    }

                    $.ajax({
                        url: rescheduleAppUrl,
                        type: 'PUT',
                        data: data,
                    })
                    .done(function(response) {
                        updateEvent(calendar, response.appointment);
                        scheduleAppModal.modal('hide');
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
                    scheduleAppModal.modal('hide');
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
                    scheduleAppModal.modal('hide');
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
                    scheduleAppModal.modal('hide');
                })
                .fail(function() {
                    console.log("error");
                });
            });
        });
    </script>
@endsection