/**
 * Format the date string.
 *
 * @param  string dateString
 * @param  string stringFormat
 * @param  string newFormat
 * @return string
 */
function formatDateString(dateString, stringFormat, newFormat)
{
    return moment(dateString, stringFormat).format(newFormat);
}

/**
 * Format the JS date object.
 *
 * @param  Javascript\Date dateObj
 * @param  string format
 * @return string
 */
function formatDateObj(dateObj, format)
{
    return moment(dateObj).format(format);
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
    var eventObj = transformToEventObj(event);

    calendar.addEvent(eventObj);
}

/**
 * Transform custom data into a standard Event Object.
 *
 * @param  \App\Model event
 * @return Fullcalendar\Event Object
 */
function transformToEventObj(event)
{
    event.title = event.patient.short_name;
    event.description = event.doctor.last_name;
    event.start = event.start_at;
    event.end = event.end_at;
    event.backgroundColor = event.doctor.color;
    event.borderColor = event.doctor.color;
    event.constraint = 'businessHours';

    return event;
}

/**
 * Determine if the given date is the doctor's office day.
 *
 * @param  \Illuminate\Support\Collection  doctorOfficeDays
 * @param  Javascript\Date  date
 * @return boolean
 */
function isDoctorOfficeDay(doctorOfficeDays, date)
{
    var officeDaysIso = doctorOfficeDays.map(function(day){
        return day.iso;
    });

    var dateIso = date.getDay();

    return $.inArray(dateIso, officeDaysIso) !== -1;
}

/**
 * Find the specific doctor's office day.
 *
 * @param  \Illuminate\Support\Collection doctorOfficeDays
 * @param  Javascript\Date
 * @return \App\BusinessDay
 */
function findDoctorOfficeDay(doctorOfficeDays, date)
{
    return doctorOfficeDays.find(x => x.iso === date.getDay());
}

/**
 * Determine if the given time is within the doctor's office hours.
 *
 * @param  \Illuminate\Support\Collection  doctorOfficeDays
 * @param  Javascript\Date
 * @param  string  format
 * @return boolean
 */
function isDoctorOfficeHour(doctorOfficeDays, date, format="HH:mm:ss")
{
    officeDay = findDoctorOfficeDay(doctorOfficeDays, date);

    var startTime = moment(officeDay.hour.start_at, format);
    var endTime = moment(officeDay.hour.end_at, format);
    var formattedTime = formatDateObj(date, format)
    var selected = moment(formattedTime, format);

    return  selected >= startTime && selected < endTime;
}

/**
 * The doctor's business hours.
 *
 * @param  Illuminate\Support\Collection doctorOfficeDays
 * @return array
 */
function doctorOfficeHours(doctorOfficeDays)
{
    return doctorOfficeDays.map(function(day) {
        var officeHours = {};

        officeHours.daysOfWeek = [day.iso];
        officeHours.startTime = formatDateString(day.hour.start_at, 'HH:mm:ss', 'HH:mm')
        officeHours.endTime = formatDateString(day.hour.end_at, 'HH:mm:ss', 'HH:mm')

        return officeHours;
    });
}

/**
 * Highlight holidays.
 *
 * @param  integer year
 * @param  string className
 */
function highlightHolidays(year, className="holiday")
{
    holidays (year).map(function(holiday){
        $('.fc-day[data-date="'+holiday+'"]').addClass(className);
    });
}

/**
 * Determine if the given date is not holiday for the given year.
 *
 * @param  Javascript\Date  date
 * @param  integer  year
 * @return boolean
 */
function isNotHoliday(date, year)
{
    return $.inArray(date, holidays(year)) == -1;
}

/**
 * All holidays.
 *
 * @param  Javascript\Date date
 * @return array ['YYYY-YY-MM']
 */
function holidays(year)
{
    var public = publicHolidays(year);
    var religious = religiousHolidays(year)

    return $.merge(public, religious);
}

/**
 * The public holidays.
 *
 * @param  integer year   [description]
 * @param  sring format [description]
 * @return array ['YYYY-YY-MM']
 */
function publicHolidays(year, format = "YYYY-MM-DD")
{
    var january1 = new Date(year, 0, 1);
    var january2 = new Date(year, 0, 2);
    var january3 = isSunday(january1) || isSunday(january2) ?  new Date(year, 0, 3) : null;
    var february15 = new Date(year, 1, 15);
    var february16 = new Date(year, 1, 16);
    var february17 = isSunday(february15) || isSunday(february16) ?  new Date(year, 1, 17) : null;
    var may1 = new Date(year, 4, 1);
    var may2 = new Date(year, 4, 2);
    var may3 = isSunday(may1) || isSunday(may2) ?  new Date(year, 4, 3) : null;
    var november11 = new Date(year, 10, 11);
    var november12 = isSunday(november11) ?  new Date(year, 10, 12) : null;

    var publicHolidays = [ january1, january2, january3, february15, february16,
    february17, may1, may2, may3, november11, november12 ];

    return publicHolidays.filter(function(el) {
        return el != null;
    }).map(function(holiday){
        return moment(holiday).format(format);
    });
}

/**
 * The religious holidays.
 *
 * @param  integer year
 * @return array ['YYYY-YY-MM']
 */
function religiousHolidays(year, format = "YYYY-MM-DD")
{
    var christmasDay = moment(new Date(year, 0, 7));
    var easterSunday = orthodoxEasterSunday(year);
    var goodFriday = orthodoxEasterSunday(year).subtract(2, 'd');
    var easterMonday = orthodoxEasterSunday(year).add(1, 'd');

    var religiousHolidays = [christmasDay, goodFriday, easterSunday, easterMonday];

    return religiousHolidays.map(function(holiday){
        return holiday.format(format);
    });
}

/**
 * The Orthodox Easter Sunday.
 *
 * @param  integer year
 * @return MomentJS\Date
 */
function orthodoxEasterSunday(year)
{
    d = (year%19*19+15)%30;

    e = (year%4*2+year%7*4-d+34)%7+d+127;

    month = Math.floor(e/31);

    a = e%31 + 1 + (month > 4);

    var easterSunday = new Date(year, (month-1), a);

    return moment(easterSunday);
}

/**
 * Determine if the given date is sunday.
 *
 * @param  Javascript\Date  date
 * @return boolean
 */
function isSunday(date)
{
    return date.getDay() == 0;
}


/**
 * Determine if the given date is not in the past.
 *
 * @param  Javascript\Date  date
 * @return boolean
 */
function isNotPast(date)
{
    return moment(date).isAfter(moment(new Date()));
}
