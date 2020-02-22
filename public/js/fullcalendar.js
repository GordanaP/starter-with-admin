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
 * Add the appointment to the calendar.
 *
 * @param FullCalendar calendar
 * @param App\Appointment appointment
 */
function addAppointmenttoCalendar(calendar, appointment)
{
    var event = eventObjectFrom(appointment);

    calendar.addEvent(event);
}

/**
 * Create the event object.
 *
 * @param  \App\Appointment appointment
 * @return Fullcalendar\Event Object
 */
function eventObjectFrom(appointment)
{
    return {
        title: appointment.patient.short_name + ' - ' + appointment.doctor.last_name,
        description: appointment.doctor.last_name,
        start: appointment.start_at,
        end: appointment.end_at,
        backgroundColor: appointment.doctor.color,
        borderColor: appointment.doctor.color,
        groupId: appointment.doctor.id,
    }
}