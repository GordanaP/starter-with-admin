<?php

namespace App\Utilities;

use App\BusinessDay;
use App\Utilities\AppCarbon;

class BusinessHour extends AppCarbon
{
    /**
     * The application carbon extension.
     *
     * @var \App\Utilities\AppCarbon
     */
    public $app_carbon;

    /**
     * Create a new class instance.
     *
     * @param \App\Utilities\AppCarbon $app_carbon
     */
    public function __construct(AppCarbon $app_carbon)
    {
        $this->app_carbon = $app_carbon;
    }

    /**
     * The business opening time on a given date.
     *
     * @param  string $date
     */
    public function opening($date) : string
    {
        $iso = $this->app_carbon->isoWeekday($date);

        return BusinessDay::findByIso($iso)->open;
    }

    /**
     * The business closing time on a given date.
     *
     * @param  string $date
     */
    public function closing($date) : string
    {
        $iso = $this->app_carbon->isoWeekday($date);

        return BusinessDay::findByIso($iso)->close;
    }

    /**
     * The last appointment start time on a given date.
     *
     * @param  string  $date
     * @param  integer $interval
     */
    public function lastAppStart($date, $interval = 15) : string
    {
        return $this->app_carbon->parse($this->closing($date))
            ->subMinutes($interval)
            ->format('H:i:s');
    }

    /**
     * Determine if the time is within business hours on a given date.
     *
     * @param  string  $time
     * @param  string  $date
     */
    public function isOfficialWorkHour($time, $date) : bool
    {
        return $this->app_carbon
            ->inTimeRange($time, $this->opening($date), $this->lastAppStart($date));
    }
}
