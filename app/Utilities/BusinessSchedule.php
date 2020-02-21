<?php

namespace App\Utilities;

use App\Utilities\AppCarbon;
use Illuminate\Support\Facades\App;

class BusinessSchedule extends AppCarbon
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
     * Determine if the date is an official work day.
     *
     * @param  string  $date
     */
    public function isBusinessDay($date) : bool
    {
       return $this->isNotPublicHoliday($date) && $this->isNotSunday($date);
    }

    /**
     * Determine if the date is not a public holiday.
     *
     * @param  string  $date
     */
    public function isNotPublicHoliday($date) : bool
    {
        $year = $this->app_carbon->parseAndFormat($date, $format='Y');

        return ! App::make('public-holiday')->all($year)->contains($date);
    }

    /**
     * Determine if the date is not Sunday.
     *
     * @param  string  $date
     */
    public function isNotSunday($date) : bool
    {
        return ! $this->app_carbon->parse($date)->isSunday();
    }
}