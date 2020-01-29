<?php

namespace App\Providers;

use App\Patient;
use App\Expertise;
use App\Observers\PatientObserver;
use App\Observers\ExpertiseObserver;
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
    }
}
