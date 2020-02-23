@extends('layouts.admin.app_dashboard')

@section('title', 'New appointment')

@section('links')
    <link href="{{ asset('vendor/fullcalendar-4.3.1/packages/core/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('vendor/fullcalendar-4.3.1/packages/daygrid/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('vendor/fullcalendar-4.3.1/packages/timegrid/main.css') }}" rel='stylesheet' />
    <link href="{{ asset('vendor/fullcalendar-4.3.1/packages/list/main.css') }}" rel='stylesheet' />
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
            var firstDay = 1;
            var defaultView = 'dayGridMonth';
            var standardDays = [1,2,3,4,5];
            var standardOpen = '09:00';
            var standardClose = '20:00';
            var saturday = [6];
            var saturdayOpen = '10:00';
            var saturdayClose = '15:00';
            var eventsListUrl = "{{ Request::route('doctor') ? route('admin.doctors.appointments.list', $doctor) : route('admin.appointments.list') }}";
            var eventLimit = 6;

            var calendar = new FullCalendar.Calendar(calendarEl, {
                plugins: [ 'interaction', 'dayGrid', 'timeGrid', 'list' ],
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: @if (! Request::route('doctor')) ' myCustomButton' @endif
                    'dayGridMonth,timeGridWeek,timeGridDay,listDay'
                },
                navLinks: true,
                customButtons: {
                    myCustomButton: {
                        text: 'New appointment',
                        click: function() {
                            scheduleAppModal.modal('show');
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
                @if (Request::route('doctor'))
                    selectable: true,
                    select: function(info) {
                        var dateObj = info.start;

                        scheduleAppModal.modal('show');
                        appDate.val(formatDate(dateObj, 'YYYY-MM-DD'));
                        appTime.val(formatDate(dateObj, 'HH:mm'));
                        appButton.text('Schedule')
                            .attr('id', 'scheduleAppButton');
                    },
                @endif
                eventClick: function(info) {
                    var eventObj = info.event;

                    scheduleAppModal.modal('show');
                    appDate.val(formatDate(eventObj.start, 'YYYY-MM-DD'));
                    appTime.val(formatDate(eventObj.start, 'HH:mm'));
                    appButton.text('Reschedule')
                        .attr('id', 'rescheduleAppButton').val(eventObj.id);
                    deleteAppButton.show().val(eventObj.id);
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