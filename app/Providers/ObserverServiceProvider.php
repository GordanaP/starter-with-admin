<?php

namespace App\Providers;

use App\Doctor;
use App\Patient;
use App\Expertise;
use App\Appointment;
use App\Observers\DoctorObserver;
use App\Observers\PatientObserver;
use App\Observers\ExpertiseObserver;
use App\Observers\AppointmentObserver;
use Illuminate\Support\ServiceProvider;

class ObserverServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Expertise::observe(ExpertiseObserver::class);
        Patient::observe(PatientObserver::class);
        Doctor::observe(DoctorObserver::class);
        Appointment::observe(AppointmentObserver::class);
    }
}
