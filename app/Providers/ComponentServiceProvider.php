<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

class ComponentServiceProvider extends ServiceProvider
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
        Blade::component('components.admin.page_header', 'adminPageHeader');
        Blade::component('components.admin.datatable', 'datatable');
        Blade::component('components.asterisks', 'asterisks');
        Blade::component('components.required_fields', 'requiredFields');
        Blade::component('components.upload_file', 'uploadFile');
    }
}
