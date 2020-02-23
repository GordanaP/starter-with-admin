/**
 * Format the date.
 *
 * @param  Javascript\Date date
 * @param  string format
 * @return string
 */
function formatDate(date, format)
{
    return moment(date).format(format);
}

/**
 * Remove the event from the calendar.
 *
 * @param  FullCalendar calendar
 * @param  integer eventId
 */
function removeEvent(calendar, eventId)
{
    var eventObj = calendar.getEventById(eventId);

    eventObj.remove();
}

/**
 * Update the appointment in the calendar.
 *
 * @param  Fullcalendar calendar
 * @param  \App\Model event
 */
function updateEvent(calendar, event)
{
    var eventObj = calendar.getEventById(event.id);
    var newStart = new Date(event.start_at);
    var newEnd = new Date(event.end_at);

    eventObj.setDates(newStart, newEnd);
}

/**
 * Add the appointment to the calendar.
 *
 * @param FullCalendar calendar
 * @param App\Model event
 */
function addEvent(calendar, event)
{
    var eventObj = getEventObjFor(event);

    calendar.addEvent(eventObj);
}

/**
 * Create the event object.
 *
 * @param  \App\Appointment appointment
 * @return Fullcalendar\Event Object
 */
function getEventObjFor(appointment)
{
    return {
        id: appointment.id,
        title: appointment.patient.short_name + ' - ' + appointment.doctor.last_name,
        description: appointment.doctor.last_name,
        start: appointment.start_at,
        end: appointment.end_at,
        backgroundColor: appointment.doctor.color,
        borderColor: appointment.doctor.color,
    }
}

/**
 * Transform custom data into a standard Event Object.
 *
 * @param  \App\Appointment eventData
 * @return Fullcalendar\Event Object
 */
function transformToEventObj(appointment)
{
    appointment.title = appointment.patient.short_name + ' - ' + appointment.doctor.last_name;
    appointment.description = appointment.doctor.last_name;
    appointment.start = appointment.start_at;
    appointment.end = appointment.end_at;
    appointment.backgroundColor = appointment.doctor.color;
    appointment.borderColor = appointment.doctor.color;

    return appointment;
}