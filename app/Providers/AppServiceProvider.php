<?php

namespace App\Providers;

use App\Utilities\AppCarbon;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        \Request::macro('appDate', function ($data) {
            $date_time_string = $data['app_date'] . ' ' . $data['app_time'];
            return (new AppCarbon)->fromFormat($date_time_string);
        });
    }
}
