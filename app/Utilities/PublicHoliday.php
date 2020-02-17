<?php

namespace App\Utilities;

use App\Utilities\AppCarbon;
use Illuminate\Support\Collection;

class PublicHoliday
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
     * The holidays over the specific year.
     *
     * @param  string $year
     */
    public function all($year) : Collection
    {
        $new_year_day = $this->newYearDay($year);
        $christmas_day = $this->christmasDay($year);
        $sovereignity_day = $this->sovereigntyDay($year);
        $easter_holiday = $this->orthodoxEaster($year);
        $labor_day = $this->laborDay($year);
        $armistice_day = $this->armisticeDay($year);

        return $new_year_day->concat($christmas_day)->concat($sovereignity_day)
            ->concat($easter_holiday)->concat($labor_day)->concat($armistice_day);
    }

    /**
     * The New Year Day.
     *
     * @param string $year
     */
    public function newYearDay($year) : Collection
    {
        $jan1 = $this->app_carbon->fromDate($year, 1, 1);
        $jan2 = $this->app_carbon->fromDate($year, 1, 2);
        $jan3 = $this->app_carbon->fromDate($year, 1, 3);
        $jan1_is_sun = $this->app_carbon->parse($jan1)->isSunday();
        $jan2_is_sun = $this->app_carbon->parse($jan2)->isSunday();

        $jan1_formatted = $this->app_carbon->parseAndFormat($jan1);
        $jan2_formatted = $this->app_carbon->parseAndFormat($jan2);
        $jan3_formatted = $this->app_carbon->parseAndFormat($jan3);

        $new_year_day = collect([ $jan1_formatted, $jan2_formatted]);

        $jan1_is_sun || $jan2_is_sun ? $new_year_day->push($jan3_formatted) : '';

        return $new_year_day;
    }

    /**
     * Thr Christmas Day.
     *
     * @param string $year
     */
    public function christmasDay($year) : Collection
    {
        $christmas_day = $this->app_carbon->fromDate($year, 1, 7);
        $christmas_day_formatted = $this->app_carbon->parseAndFormat($christmas_day);

        return collect([$christmas_day_formatted]);
    }

    /**
     * The Sovereignity Day.
     *
     * @param string $year
     */
    public function sovereigntyDay($year) : Collection
    {
        $feb15 = $this->app_carbon->fromDate($year, 2, 15);
        $feb16 = $this->app_carbon->fromDate($year, 2, 16);
        $feb17 = $this->app_carbon->fromDate($year, 2, 17);
        $feb15_is_sun = $this->app_carbon->parse($feb15)->isSunday();
        $feb16_is_sun = $this->app_carbon->parse($feb16)->isSunday();

        $feb15_formatted = $this->app_carbon->parseAndFormat($feb15);
        $feb16_formatted = $this->app_carbon->parseAndFormat($feb16);
        $feb17_formatted = $this->app_carbon->parseAndFormat($feb17);

        $sovereignity_day = collect([ $feb15_formatted, $feb16_formatted]);

        $feb15_is_sun || $feb16_is_sun ? $sovereignity_day->push($feb17_formatted) : '';

        return $sovereignity_day;
    }

    /**
     * The Orthodox Easter.
     *
     * @param string $year
     */
    public function orthodoxEaster($year) : Collection
    {
        $easter_sun = $this->easterSunday($year);
        $good_fri = $this->app_carbon->parse($easter_sun)->subDays(2);
        $easter_mon = $this->app_carbon->parse($easter_sun)->addDay(1);

        $easter_sun_formatted = $this->app_carbon->parseAndFormat($easter_sun);
        $good_fri_formatted = $this->app_carbon->format($good_fri);
        $easter_mon_formatted = $this->app_carbon->format($easter_mon);

        return collect([$good_fri_formatted, $easter_sun_formatted, $easter_mon_formatted]);
    }

    /**
     * The Labour Day.
     *
     * @param string $year
     */
    public function laborDay($year) : Collection
    {
        $may1 = $this->app_carbon->fromDate($year, 5, 1);
        $may2 = $this->app_carbon->fromDate($year, 5, 2);
        $may3 = $this->app_carbon->fromDate($year, 5, 3);
        $may1_is_sun = $this->app_carbon->parse($may1)->isSunday();
        $may2_is_sun = $this->app_carbon->parse($may2)->isSunday();

        $may1_formatted = $this->app_carbon->parseAndFormat($may1);
        $may2_formatted = $this->app_carbon->parseAndFormat($may2);
        $may3_formatted = $this->app_carbon->parseAndFormat($may3);

        $labor_day = collect([ $may1_formatted, $may2_formatted]);

        $may1_is_sun || $may2_is_sun ? $labor_day->push($may3_formatted) : '';

        return $labor_day;
    }

    /**
     * The Armistice Day.
     *
     * @param string $year
     */
    public function armisticeDay($year) : Collection
    {
        $nov11 = $this->app_carbon->fromDate($year, 11, 11);
        $nov12 = $this->app_carbon->fromDate($year, 11, 12);
        $nov11_is_sun = $this->app_carbon->parse($nov11)->isSunday();

        $nov11_formatted = $this->app_carbon->parseAndFormat($nov11);
        $nov12_formatted = $this->app_carbon->parseAndFormat($nov12);

        $armistice_day = collect([$nov11_formatted]);

        $nov11_is_sun ? $armistice_day->push($nov12_formatted) : '';

        return $armistice_day;
    }

    /**
     * The Easter Sunday.
     *
     * @param string $year
     */
    public function EasterSunday($year) : string
    {
        $a = $year % 4;
        $b = $year % 7;
        $c = $year % 19;
        $d = (19 * $c + 15) % 30;
        $e = (2 * $a + 4 * $b - $d + 34) % 7;
        $month = floor(($d + $e + 114) / 31);
        $day = (($d + $e + 114) % 31) + 1;

        return $this->app_carbon->fromDate($year, $month, ($day+13));
    }
}