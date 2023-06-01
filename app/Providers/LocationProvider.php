<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class LocationProvider extends ServiceProvider
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
        $this->app->singleton('location', function ($app) {
            return new \App\Utils\LocationGenerator();
        });
    }
}
