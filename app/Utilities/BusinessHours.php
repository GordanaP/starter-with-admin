<?php

namespace App\Utilities;

use App\Utilities\AppCarbon;
use App\BusinessHoursSchedule;

class BusinessHours extends AppCarbon
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
     * The business opening time on a given day.
     *
     * @param  string $day
     */
    public function opening($day) : string
    {
        return BusinessHoursSchedule::where('day',$day)->first()->open;
    }

    /**
     * The business closing time on a given day.
     *
     * @param  string $day
     */
    public function closing($day) : string
    {
        return BusinessHoursSchedule::where('day',$day)->first()->close;
    }

    /**
     * The last appointment start time on a specific day.
     *
     * @param  string  $day
     * @param  integer $interval
     */
    public function lastAppStart($day, $interval = 15) : string
    {
        return $this->app_carbon->parse($this->closing($day))
            ->subMinutes($interval)
            ->format('H:i:s');
    }

    /**
     * Determine if the time is within business hours on a given day.
     *
     * @param  string  $time
     * @param  string  $day
     */
    public function isOfficialWorkHour($time, $day) : bool
    {
        return $this->app_carbon
            ->inTimeRange($time, $this->opening($day), $this->lastAppStart($day));
    }

}