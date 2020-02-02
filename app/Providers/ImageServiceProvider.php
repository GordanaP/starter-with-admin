<?php

namespace App\Providers;

use App\Contracts\ImageManager;
use App\Repositories\DoctorRepository;
use Illuminate\Support\ServiceProvider;
use App\Services\ManageImage\DoctorImage;

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

        $this->app->when(DoctorRepository::class)
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
