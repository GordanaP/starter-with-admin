<?php

namespace App\Providers;

use App\Contracts\ImageManager;

use Illuminate\Support\ServiceProvider;
use App\Services\ManageImage\DoctorImage;
use App\Http\Controllers\Doctor\DoctorController;

class ImageServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->instance('doctor_image', new DoctorImage);

        $this->app->when(DoctorController::class)
            ->needs(ImageManager::class)
            ->give(DoctorImage::class);
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
