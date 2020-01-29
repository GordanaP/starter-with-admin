<?php

namespace App\Utilities;

use Carbon\Carbon;
use Keygen\Keygen;

class Presenter
{
    /**
     * Create a medical record number.
     *
     * @param  string $birthday
     */
    public function createMRN($birthday) : string
    {
        $bd = $this->formatBirthday($birthday);

        return Keygen::numeric(9)->prefix($bd)->generate();
    }

    /**
     * Format the day of birth.
     *
     * @param  string $birthday
     */
    public function formatBirthday($birthday) : string
    {
        $day = $this->toCarbon($birthday)->format('d');

        $month = $this->toCarbon($birthday)->format('m');

        $year = $this->toCarbon($birthday)->format('Y');

        $year_substr = substr($year, 1, 3);

        return $day.$month.$year_substr;
    }

    /**
     * Transform the date to Carbon object.
     *
     * @param  string $date
     */
    public function toCarbon($date) : Carbon
    {
        return Carbon::parse($date);
    }

    /**
     * Format the Carbon date.
     *
     * @param  string $date
     * @param  string $format
     * @return \Carbon\Carbon
     */
    public function formattedCarbon($date = null, $format='Y-m-d') : string
    {
        return $date ? Carbon::parse($date)->format($format) : '';
    }
}