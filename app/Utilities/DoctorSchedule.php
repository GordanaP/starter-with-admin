<?php

namespace App\Utilities;

use App\Doctor;
use App\BusinessDay;
use App\Utilities\AppCarbon;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Request;

class DoctorSchedule extends AppCarbon
{
    /**
     * The application carbon class.
     *
     * @var \App\Utilities\AppCarbon
     */
    public $app_carbon;

    /**
     * The doctor.
     *
     * @var \App\Doctor
     */
    public $doctor;

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
     * Set the doctor.
     *
     * @param \App\Doctor $doctor
     */
    public function setDoctor($doctor): DoctorSchedule
    {
        $this->doctor = $doctor;

        return $this;
    }

    /**
     * Determine if the doctor's scheduling time slot is free on a given day.
     *
     * @param  string  $time
     * @param  string  $date
     */
    public function isNotBookedTimeSlot($slot, $date): bool
    {
        $date_time_string = $date .' '.$slot;
        $app_time = $this->app_carbon->fromFormat($date_time_string);

        return $this->doctor->appointments->where('start_at', $app_time)->isEmpty();
    }

    /**
     * Determine if the time slot is within the doctor's scheduling time slots.
     *
     * @param  string  $slot
     * @param  string  $date
     */
    public function isSchedulingTimeSlot($slot, $date): bool
    {
        return $this->schedulingTimeSlots($date)->contains($slot);
    }

    /**
     * The doctor's scheduling time slots for the given day.
     *
     * @param  string $date
     */
    public function schedulingTimeSlots($date): Collection
    {
        $start_at = $this->officeDayStartHour($date);
        $end_at = $this->lastSchedulingTimeSlot($date);
        $minutes = $this->doctor->app_slot;

        $time_slots = $this->app_carbon->minutesIntervals($start_at, $end_at, $minutes);

        return collect($time_slots)->map(function($time_slot) {
            return $time_slot->format('H:i');
        });
    }

    /**
     * Determine if the doctor is in the office on the given day.
     *
     * @param  string  $date
     */
    public function isOfficeDay($date): bool
    {
        $date_iso = $this->app_carbon->isoWeekDay($date);

        return $this->doctor->business_days->map(function($day){
            return $day->iso;
        })->contains($date_iso);
    }

    /**
     * Determine if the time is within the doctor's office hours on a given date.
     *
     * @param  string  $time
     * @param  string  $date
     */
    public function isOfficeHour($time, $date): bool
    {
        return $this->app_carbon
            ->inTimeRange(
                $time,
                $this->officeDayStartHour($date),
                $this->lastSchedulingTimeSlot($date)
        );
    }

    /**
     * Tha doctor's last scheduled time slot on a given day.
     *
     * @param  \App\Doctor  $doctor
     * @param  string  $date
     * @param  integer $interval
     */
    public function lastSchedulingTimeSlot($date): string
    {
        $office_day_end_at = $this->officeDayEndHour($date);
        $app_slot = $this->doctor->app_slot;

        return $office_day_end_at
            ? $this->app_carbon->parse($office_day_end_at)
                ->subMinutes($app_slot)
                ->format('H:i:s') : '';
    }

    /**
     * The doctor's office day end hour.
     *
     * @param  string $date
     */
    public function officeDayEndHour($date): string
    {
        $office_day = $this->findOfficeDay($date);

        return $office_day ? $office_day->hour->end_at : '';
    }

    /**
     * The doctor's office day start hour.
     *
     * @param  string $date
     */
    public function officeDayStartHour($date): string
    {
        $office_day = $this->findOfficeDay($date);

        return $office_day ? $office_day->hour->start_at : '';
    }

    /**
     * Find the doctor's specific office day.
     *
     * @param  string $date
     */
    public function findOfficeDay($date): ?BusinessDay
    {
        $date_iso = $this->app_carbon->isoWeekDay($date);

        return $this->doctor->business_days->where('id', $date_iso)->first();
    }
}
