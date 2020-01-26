<?php

namespace App\Providers;

use App\Expertise;
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
    }
}
