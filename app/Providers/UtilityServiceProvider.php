<?php

namespace App\Providers;

use App\Utilities\AppCarbon;
use App\Utilities\Presenter;
use App\Utilities\BusinessDay;
use App\Utilities\CountryList;
use App\Utilities\BusinessHours;
use App\Utilities\PublicHoliday;
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
        $this->app->instance('business-day', new BusinessDay(new AppCarbon));
        $this->app->instance('business-hours', new BusinessHours(new AppCarbon));
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
