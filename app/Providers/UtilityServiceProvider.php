<?php

namespace App\Providers;

use App\Utilities\Presenter;
use App\Utilities\CountryList;
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
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
