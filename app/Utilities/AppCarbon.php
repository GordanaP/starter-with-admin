<?php

namespace App\Utilities;

use Carbon\CarbonPeriod;
use Illuminate\Support\Carbon;
use App\Utilities\PublicHoliday;

class AppCarbon
{
    public function minutesIntervals($start_at, $end_at, $minutes)
    {
        return CarbonPeriod::since($start_at)->minutes($minutes)->until($end_at);
    }

    /**
     * The time is during business hours.
     *
     * @param  string  $time
     * @param  string  $start
     * @param  string  $end
     */
    public function inTimeRange($time, $start, $end) : bool
    {
        return $this->parse($time)->between($this->parse($start), $this->parse($end));
    }

    /**
     * The iso weekday for a given date.
     *
     * @param  string $date
     */
    public function isoWeekDay($date) : int
    {
        return $this->parse($date)->isoWeekday();
    }

    /**
     * Parse and format the date.
     *
     * @param  string $date
     * @param  string $format
     */
    public function parseAndFormat($date, $format='Y-m-d') : string
    {
        return Carbon::parse($date)->format($format);
    }

    /**
     * Format the date.
     *
     * @param  \Illuminate\Support\Carbon $date
     * @param  string $format
     */
    public function format($date, $format="Y-m-d") : string
    {
        return $date->format($format);
    }

    /**
     * Parse the date.
     *
     * @param  string $date
     */
    public function parse($date) : Carbon
    {
        return Carbon::parse($date);
    }

    /**
     * Create from format.
     *
     * @param  string $string
     * @param  string $format
     */
    public function fromFormat($string, $format = 'Y-m-d H:i'): string
    {
        return Carbon::createFromFormat($format, $string)->toDateTimeString();
    }

    /**
     * Create from date.
     *
     * @param  string $year
     * @param  string $month
     * @param  string $date
     */
    public function fromDate($year, $month, $date) : string
    {
        return Carbon::createFromDate($year, $month, $date);
    }

    /**
     * Create from time.
     *
     * @param  string $time
     */
    public function fromTime($time) : string
    {
        return Carbon::createFromTimeString($time);
    }

    /**
     * The date is valid date.
     *
     * @param  string  $date
     * @param  string  $format
     */
    public function validate($date, $format='Y-m-d') : bool
    {
        return date($format, strtotime($date)) == $date;
    }
}