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
 * Format the Javascript date object.
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
 * Update the calendar event.
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
 * Add the event to the calendar.
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
 * Transform custom data into a standard Fullcalendar Event Object.
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
 * Determine if the given date and time can be selected for an appointment scheduling.
 *
 * @param  Javascript\Date  date
 * @param  \Illuminate\Support\Collection  doctorOfficeDays
 * @param  string  viewType
 * @return boolean
 */
function areSelectableDayAndTime(date, doctorOfficeDays, viewType)
{
    if (viewType == 'dayGridMonth') {
        return  isSelectableDay(date, doctorOfficeDays)
    } else {
        return  isSelectableDay(date, doctorOfficeDays) &&
                isDoctorOfficeHour(date, doctorOfficeDays)
    }
}

/**
 * Determine if the given date can be selected for an appoinment scheduling.
 *
 * @param  Javascript\Date  date
 * @param  \Illuminate\Support\Collection  doctorOfficeDays
 * @return boolean
 */
function isSelectableDay(date, doctorOfficeDays)
{
    return  isNotPast(date) &&
            isNotHoliday(date) &&
            isDoctorOfficeDay(date, doctorOfficeDays)
}

/**
 * Determine if the given date is the doctor's office day.
 *
 * @param  Javascript\Date  date
 * @param  \Illuminate\Support\Collection  doctorOfficeDays
 * @return boolean
 */
function isDoctorOfficeDay(date, doctorOfficeDays)
{
    var dateIso = date.getDay();

    return doctorOfficeDays.map(function(day) {
        return day.iso;
    }).includes(dateIso);
}

/**
 * Find the specific doctor's office day.
 *
 * @param  Javascript\Date
 * @param  \Illuminate\Support\Collection doctorOfficeDays
 * @return \App\BusinessDay
 */
function findDoctorOfficeDay(date, doctorOfficeDays)
{
    return doctorOfficeDays.find(x => x.iso === date.getDay());
}

/**
 * Determine if the given time is within the doctor's office hours.
 *
 * @param  Javascript\Date
 * @param  \Illuminate\Support\Collection  doctorOfficeDays
 * @param  string  format
 * @return boolean
 */
function isDoctorOfficeHour(date, doctorOfficeDays, format="HH:mm:ss")
{
    var officeDay = findDoctorOfficeDay(date, doctorOfficeDays);

    var startTime = moment(officeDay.hour.start_at, format);
    var endTime = moment(officeDay.hour.end_at, format);
    var formattedTime = formatDateObj(date, format)
    var selected = moment(formattedTime, format);

    return  selected >= startTime && selected < endTime;
}

/**
 * The doctor's office hours.
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
 * @param  FullCalendar\Object fcDay
 * @param  string className
 */
function highlightHolidays(fcDay, className="holiday")
{
    var year = fcDay.date.getFullYear();
    var fcDate = formatDateObj(fcDay.date, 'YYYY-MM-DD');
    var calendarEl = fcDay.el;

    holidays(year).map(function(holiday) {
        holiday.dates.map(function(date){
            var holidayDate = formatDateObj(date, 'YYYY-MM-DD');

            $('.fc-day[data-date="' + holidayDate + '"]').addClass('holiday');

            if(fcDate == holidayDate) {
                calendarEl.insertAdjacentHTML('beforeend', '<i class="fc-content" aria-hidden="true">'+ holiday.name +'</i>');
            }
        });
    });
}

/**
 * Determine if the given date is not holiday.
 *
 * @param  Javascript\Date  date
 * @return boolean
 */
function isNotHoliday(date)
{
    var year = date.getFullYear();
    var formattedDate = formatDateObj(date, 'YYYY-MM-DD');

    return ! holidays(year).map(function(holiday) {
         return holiday.dates.filter(function(holiday){
            return holiday != null;
        }).map(function(day){
            return formatDateObj(day, 'YYYY-MM-DD');
        });
    }).flat().includes(formattedDate);
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
    var religious = religiousHolidays(year);

    return $.merge(public, religious);
}

/**
 * The public holidays.
 *
 * @param  integer year   [description]
 * @param  string format [description]
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

    return [
        {
            dates: [ january1, january2, january3 ],
            name: 'New Year'
        },
        {
            dates: [ february15, february16, february17 ],
            name: 'Sovereignity Day'
        },
        {
            dates: [ may1, may2, may3 ],
            name: 'Labor Day'
        },
        {
            dates: [ november11, november12 ],
            name: 'Armistice Day'
        },
    ];
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

    return [
        {
            dates: [ christmasDay ],
            name: 'Christmas Day'
        },
        {
            dates: [ goodFriday ],
            name: 'Good Friday'
        },
        {
            dates: [ easterSunday ],
            name: 'Easter Sunday'
        },
        {
            dates: [ easterMonday ],
            name: 'Easter Monday'
        },
    ];
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
