<?php

namespace App\Providers;

use App\Utilities\AppCarbon;
use App\Utilities\Presenter;
use App\Utilities\CountryList;
use App\Utilities\BusinessHour;
use App\Utilities\PublicHoliday;
use App\Utilities\DoctorSchedule;
use App\Utilities\BusinessSchedule;
use Illuminate\Support\ServiceProvider;

class UtilityServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->instance('presenter', new Presenter);
        $this->app->instance('country-list', new CountryList);
        $this->app->instance('public-holiday', new PublicHoliday(new AppCarbon));
        $this->app->instance('business-schedule', new BusinessSchedule(new AppCarbon));
        $this->app->instance('business-hour', new BusinessHour(new AppCarbon));
        $this->app->instance('doctor-schedule', new DoctorSchedule(new AppCarbon));
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {

    }
}
