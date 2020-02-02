@extends('layouts.admin.app_dashboard')

@section('title', 'Appointments')

@section('links')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.css" />
    <link rel="stylesheet" type="media" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.print.min.css" />
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Appointments</h4>
            <div id="calendar" class="full-calendar"></div>
        </div>
    </div>
@endsection

@section('scripts')

    <!-- Moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.23.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.5.23/moment-timezone.min.js"></script>
    <!-- Moment plugin to calculate dates for weekdays -->
    <script src="https://cdn.jsdelivr.net/npm/moment-weekdaysin@1.0.1/moment-weekdaysin.min.js"></script>

    <!-- Fullcalendar -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/gcal.min.js"></script>

    <script>
        var adminAppointmentsListUrl = "{{ route('admin.appointments.list') }}";

        $('#calendar').fullCalendar({
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,list'
            },
            navLinks: true, // can click day/week names to navigate views
            editable: true,
            eventLimit: true, // allow "more" link when too many events
            events:  {
                url: adminAppointmentsListUrl,
            },
            eventDataTransform: function(event) {
                event.title = event.patient.full_name;
                event.description = event.doctor.last_name;
                event.start = event.start_at;
                event.end = event.end_at;

                return event;
            }
        })
    </script>
@endsection

